<div>
    <h5 class="border-bottom pb-3 mt-5">Comments</h5>
    <form wire:submit.prevent="saveComment" class="contact-form mt-5">
        <form action="">
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="position-relative mb-3">
                        <textarea wire:model="comment" id="comments" rows="4" class="form-control" placeholder="Enter your message" required></textarea>
                        @error('comment') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-end">
                    <button name="submit" type="submit" id="submit" class="btn btn-primary btn-hover">Send<i class="uil uil-message ms-1"></i></button>
                </div>
            </div>
        </form>
    </form>

    @forelse ($comments as $comment)
        <div class="mt-5">
            <div class="d-sm-flex align-items-top">
                <div class="flex-shrink-0">
                    <img class="rounded-circle avatar-md img-thumbnail" src="{{ asset('frontend') }}/assets/images/user/img-01.jpg" alt="img" />
                </div>
                <div class="flex-grow-1 ms-sm-3">
                    <small class="float-end fs-12 text-muted"><i class="uil uil-clock"></i> 30 min Ago</small>
                    <a href="javascript:(0)" class="primary-link"><h6 class="fs-16 mt-sm-0 mt-3 mb-0">Rebecca Swartz</h6></a>
                    <p class="text-muted fs-14 mb-0">Aug 10, 2021</p>
                    <div class="my-3 badge bg-light">
                        <a href="javascript: void(0);" class="text-primary"><i
                                class="mdi mdi-reply"></i> Reply</a>
                    </div>
                    <p class="text-muted fst-italic mb-0">{{ $comment->text }}</p>
                </div>
            </div>
        </div>
    @empty

    @endforelse
    <div class="mt-4 d-flex justify-content-center">
        {{ $comments->links() }}
    </div>


</div>
