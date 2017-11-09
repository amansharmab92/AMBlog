<div class="blog-masthead">
    <div class="container">
        <nav class="nav">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link" href="/blog/create">Create</a>
            <a class="nav-link" href="/aboutus">About Us</a>
            <?php if(Auth::check()): ?>
                <a class="nav-link ml-auto" href="/"><?php echo e(auth()->user()->name); ?></a>
                <a class="nav-link" href="/logout">Logout</a>
            <?php else: ?>
                <a class="nav-link ml-auto" href="/register">Sign Up</a>
                <a class="nav-link" href="/login">Sign In</a>
            <?php endif; ?>
        </nav>
    </div>
</div>