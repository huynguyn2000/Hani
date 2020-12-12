<h2 class="blog-title">{{ $article->a_name }}</h2>
<div class="content">
    <p>
        {{ $article->a_content }} ...
    </p>
</div>
<br>
<div class="blog-meta">
    <span class="author"><a href="#"><i class="fa fa-user"></i>By Admin</a><a href="#"><i class="fa fa-calendar"></i>{{ $article->created_at }}</a>></span>
</div>
