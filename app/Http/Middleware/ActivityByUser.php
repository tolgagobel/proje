<?php
namespace App\Http\Middleware;
use App\Models\User;
use Closure;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class ActivityByUser
{
    public function handle($request, Closure $next)
    {
        if (auth('admin')->check()) {
            $expiresAt = Carbon::now()->addMinutes(1); // keep online for 1 min
            Cache::put('user-is-online-' . auth('admin')->user()->id, true, $expiresAt);
            // last seen
            User::where('id', auth('admin')->user()->id)->update(['last_seen' => (new \DateTime())->format("Y-m-d H:i:s")]);
        }
        return $next($request);
    }
}
