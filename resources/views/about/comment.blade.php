<div class="comments">
    <h3 class="comment-title">Comments ({{ $countCMT }})</h3>
    <!-- Single Comment -->
    @if(isset($comments))
        @foreach($comments as $comment)
            <div class="single-comment">
                <img src="https://via.placeholder.com/80x80" alt="#">
                <div class="content">
                    <h4>{{ $comment->cmt_name }}<span>At {{ $comment->created_at }}</span></h4>
                    <p>{{ $comment->cmt_content }}</p>
                    <div class="button">
                        <a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
                    </div>
                </div>
            </div>
    @endforeach
    @endif
<!-- End Single Comment -->
</div>
