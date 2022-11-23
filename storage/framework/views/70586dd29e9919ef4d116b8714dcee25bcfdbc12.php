<div class="tab-pane fade" id="account-vertical-social" role="tabpanel" aria-labelledby="account-pill-social" aria-expanded="false">
    
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.social-media', ['user' => $user])->html();
} elseif ($_instance->childHasBeenRendered('rr6QyDa')) {
    $componentId = $_instance->getRenderedChildComponentId('rr6QyDa');
    $componentTag = $_instance->getRenderedChildComponentTagName('rr6QyDa');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('rr6QyDa');
} else {
    $response = \Livewire\Livewire::mount('user.social-media', ['user' => $user]);
    $html = $response->html();
    $_instance->logRenderedChild('rr6QyDa', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/admin/users/settings/socialmedia.blade.php ENDPATH**/ ?>