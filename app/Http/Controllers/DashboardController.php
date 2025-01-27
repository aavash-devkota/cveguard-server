<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $total_projects_count = $user->projects->count();
        $total_packages_scanned_count = DB::table('package_scan')
            ->join('scans', 'package_scan.scan_id', '=', 'scans.id')
            ->join('projects', 'scans.project_id', '=', 'projects.id')
            ->join('users', 'projects.user_id', '=', 'users.id')
            ->distinct('package_scan.package_id')
            ->count('package_scan.package_id');
        $total_vulnerabilities_found_count = DB::table('scan_vulnerability')
            ->join('scans', 'scan_vulnerability.scan_id', '=', 'scans.id')
            ->join('projects', 'scans.project_id', '=', 'projects.id')
            ->join('users', 'projects.user_id', '=', 'users.id')
            ->distinct('scan_vulnerability.vulnerability_id')
            ->count('scan_vulnerability.vulnerability_id');
        $vulnerabilities_by_severity = DB::table('scan_vulnerability')
            ->join('scans', 'scan_vulnerability.scan_id', '=', 'scans.id')
            ->join('projects', 'scans.project_id', '=', 'projects.id')
            ->join('users', 'projects.user_id', '=', 'users.id')
            ->join('vulnerabilities', 'scan_vulnerability.vulnerability_id', '=', 'vulnerabilities.id')
            ->select('vulnerabilities.severity', DB::raw('COUNT(*) as count'))
            ->groupBy('vulnerabilities.severity')
            ->get()
            ->pluck('count', 'severity')
            ->toArray();
        $user_projects = $user->projects;

        // Get the packages count list of last 10 days
        $dates = collect();
        for ($i = 9; $i >= 0; $i--) {
            $dates->push(Carbon::now()->subDays($i)->format('Y-m-d'));
        }
        $packages_scanned_last_10_days = DB::table('package_scan')
            ->join('scans', 'package_scan.scan_id', '=', 'scans.id')
            ->join('projects', 'scans.project_id', '=', 'projects.id')
            ->join('users', 'projects.user_id', '=', 'users.id')
            ->select(DB::raw('DATE(scans.created_at) as scan_date'), DB::raw('COUNT(DISTINCT(package_scan.package_id)) as package_count'))
            ->where('scans.created_at', '>=', Carbon::now()->subDays(10))
            ->groupBy(DB::raw('DATE(scans.created_at)'))
            ->orderBy('scan_date')
            ->get()
            ->keyBy('scan_date');
        $packages_scanned_last_10_days = $dates->mapWithKeys(function ($date) use ($packages_scanned_last_10_days) {
            return [$date => $packages_scanned_last_10_days->get($date)->package_count ?? 0];
        })->toArray();

        // Get the vulnerabilities count list of last 10 days
        $dates = collect();
        for ($i = 9; $i >= 0; $i--) {
            $dates->push(Carbon::now()->subDays($i)->format('Y-m-d'));
        }
        $vulnerabilities_found_last_10_days = DB::table('scan_vulnerability')
            ->join('scans', 'scan_vulnerability.scan_id', '=', 'scans.id')
            ->join('projects', 'scans.project_id', '=', 'projects.id')
            ->join('users', 'projects.user_id', '=', 'users.id')
            ->select(DB::raw('DATE(scans.created_at) as scan_date'), DB::raw('COUNT(DISTINCT(scan_vulnerability.vulnerability_id)) as vulnerability_count'))
            ->where('scans.created_at', '>=', Carbon::now()->subDays(10))
            ->groupBy(DB::raw('DATE(scans.created_at)'))
            ->orderBy('scan_date')
            ->get()
            ->keyBy('scan_date');
        $vulnerabilities_found_last_10_days = $dates->mapWithKeys(function ($date) use ($vulnerabilities_found_last_10_days) {
            return [$date => $vulnerabilities_found_last_10_days->get($date)->vulnerability_count ?? 0];
        })->toArray();

        return view('dashboard.index', compact(
            'total_projects_count',
            'total_packages_scanned_count',
            'total_vulnerabilities_found_count',
            'vulnerabilities_by_severity',
            'user_projects',
            'packages_scanned_last_10_days',
            'vulnerabilities_found_last_10_days'
        ));
    }
}
