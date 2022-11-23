<section id="section-fun-facts" class="pt60 pb60">
    <div class="container">
        <div class="row">

            <?php echo $__env->make('frontend.widget.info-prosiding', ['data' => $prosidingInfo, 'title' => 'INFO PROSIDING', 'limit' => 3], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('frontend.widget.agenda', ['data' => $agenda, 'title' => 'AGENDA', 'limit' => 3], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('frontend.widget.contact', ['cutomerCare' => $customerCare, 'title' => 'KONTAK', 'limit' => 3], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </div>
</section>
<?php /**PATH /home/proh9171/public_html/prosiding.stpkat.ac.id/resources/views/frontend/sections/second-line.blade.php ENDPATH**/ ?>