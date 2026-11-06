<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-neutral-primary fixed w-full z-20 top-0 start-0 border-b border-default">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-default rounded-base bg-neutral-secondary-soft md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-neutral-primary">
        <li>
          <a href="/" class="block py-2 px-3 text-black bg-brand rounded md:bg-transparent md:text-fg-brand md:p-0" aria-current="page">Home</a>
        </li>
        <li>
          <a href="/about" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">About</a>
        </li>
        <li>
          <a href="/blog" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Blog</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    @yield('content')
    <footer class="fixed bottom-0 left-0 z-20 w-full p-4 bg-neutral-primary-soft border-t border-default shadow-sm md:flex md:items-center md:justify-between md:p-6">
    <span class="text-sm text-body sm:text-center">© 2026 <a class="hover:underline">AFL2™</a>. Web Development.
    </span>
</footer>
</body>
</html>