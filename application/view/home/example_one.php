<div class="container">
    <h2>You are in the View: application/view/home/example_one.php (everything in the box comes from this file)</h2>
    <p>In a real application this could be a normal page.</p>
</div>

<table>
<?php foreach ($songs as $song) { ?>
    <tr>
        <td><?php if (isset($song->artist)) echo htmlspecialchars($song->artist, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($song->track)) echo htmlspecialchars($song->track, ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>
<?php } ?>
</table>