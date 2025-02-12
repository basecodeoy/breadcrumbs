<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Breadcrumbs;

use BaseCodeOy\Crate\Package\AbstractServiceProvider;
use Illuminate\Contracts\Foundation\Application;

final class ServiceProvider extends AbstractServiceProvider
{
    #[\Override()]
    public function packageRegistered(): void
    {
        $this->app->singleton('breadcrumbs', fn (Application $application) => $application->make(Breadcrumbs::class));
    }
}
