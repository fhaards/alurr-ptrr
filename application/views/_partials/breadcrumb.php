<!-- <ol class="breadcrumb">
<?php foreach ($this->uri->segments as $segment): ?>
    <?php 
        $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
        $is_active =  $url == $this->uri->uri_string;
    ?>


    <li class="breadcrumb-item <?php echo $is_active ? 'active': '' ?>">
        <?php if($is_active): ?>
            <?php echo ucfirst($segment) ?>
        <?php else: ?>
            <a href="<?php echo site_url($url) ?>"><?php echo ucfirst($segment) ?></a>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</ol>
 -->

<?php
    $segments = array_map(function ($item) {
    $needle   = '-';
    $replacer = ' ';
    return ucfirst(str_replace($needle, $replacer, $item));
}, $this->uri->segments);
$lastSegmentKey = count($segments) - 1;

$isUpdatePage = array_reduce($segments, function ($carry, $segment) {
    $pattern = '/ubah/i';
    return boolval(preg_match($pattern, $segment)) ? $carry + 1: $carry;
}, 0);

$isUpdatePage = boolval($isUpdatePage);

$urls = [];
$uriString = $this->uri->uri_string();

foreach ($segments as $segmentKey => $segment) {
    $chunkSize  = $segmentKey;
    $chunkedUri = array_chunk(explode('/', $uriString), $chunkSize);
    $urls[$segmentKey] = implode('/', $chunkedUri[0]);
}
?>

<?php if ($isUpdatePage): ?>
    <ol class="breadcrumb">
        <li class="breacrumb-item">
            <a href="<?= site_url($urls[1]); ?>">
                <?= $segments[1]; ?>
            </a> &nbsp; / &nbsp;
        </li>
        <li class="breacrumb-item is-active">
            <?= $segments[2] ?>
        </li>
    </ol>
<?php else: ?>
    <ol class="breadcrumb">
    <?php foreach ($segments as $segmentKey => $segment): ?>
        <?php if ($lastSegmentKey == $segmentKey): ?>
            <li class="breacrumb-item is-active">
               a <?= $segment; ?>
            </li>
        <?php else: ?>
            <li class="breacrumb-item">
                <a href="<?= site_url($urls[$segmentKey]); ?>">
                    <?= $segment; ?>
                </a>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ol>
<?php endif; ?>