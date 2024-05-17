@include('partials.layouts.header')
@include('partials.layouts.sidebar')
@include('partials.layouts.navbar')
      <main class="main-content w-full px-[var(--margin-x)] pb-8">
        @yield('content')
      </main>
@include('partials.layouts.footer')   
