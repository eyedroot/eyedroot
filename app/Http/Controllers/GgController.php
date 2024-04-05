<?php

namespace App\Http\Controllers;

class GgController
{
    public function getVersion(): array
    {
        return [
            'latestVersion' => '2.1.0',
            'publicRepositoryUrl' => 'https://github.com/eyedroot/gg-client',
            'releaseNotes' => [
                'v2.1.0' => [
                    <<<'HTML'
<h2>🎉 Release v2.1.0 🎉</h2>

<p>This update (v2.1.0) focuses on enhancements in aesthetics and usability.</p>
<p>Please remember to always update to the latest version of the library. ($ composer require --dev beaverlabs/gg)</p>

<ul>
    <li>Removed Electron's default window header and updated the scrollbar to be more visually appealing.</li>
    <li>Updated the dark mode colors to more sophisticated values.</li>
    <li>Added a shortcut for clearing the entire log: (Cmd + Shift + C).</li>
    <li>Changed the desktop app icon. (Subject to change in the future)</li>
    <li>Additionally, adjusted the margins that were detracting from the visual appeal.</li>
</ul>
HTML,
                ],
                'v2.0.1' => [
                    <<<'HTML'
<h2>Release v2.0.1</h2>

<p>A major update has been carried out. Koreans might develop an illness from impatience if they are unable to press the 'Close' button in elevators.</p>

<ul>
    <li>update: Improved the mechanism to work lighter and faster by utilizing data compression (`msgpack`). Compatible with `<strong>eyedroot/gg:^2.0.0</strong>` (requires php ^8.3 or higher).</li>
    <li>update: Security update has been made.</li>
</ul>
HTML,
                ],
            ],
        ];
    }
}
