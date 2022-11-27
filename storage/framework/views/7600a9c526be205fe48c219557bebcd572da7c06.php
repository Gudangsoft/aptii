<div class="tab-pane fade" id="account-vertical-social" role="tabpanel" aria-labelledby="account-pill-social" aria-expanded="false">
    
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.social-media', ['user' => $user])->html();
} elseif ($_instance->childHasBeenRendered('PMBF5ym')) {
    $componentId = $_instance->getRenderedChildComponentId('PMBF5ym');
    $componentTag = $_instance->getRenderedChildComponentTagName('PMBF5ym');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('PMBF5ym');
} else {
    $response = \Livewire\Livewire::mount('user.social-media', ['user' => $user]);
    $html = $response->html();
    $_instance->logRenderedChild('PMBF5ym', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/admin/users/settings/socialmedia.blade.php ENDPATH**/ ?>