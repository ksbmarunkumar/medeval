 @extends('base')


 @section('main_section')
     <section class="events__area pt-10 pb-10 p-relative">
         <div id="paper_component"></div>
     </section>
     @viteReactRefresh
     @vite('resources/js/app.jsx')
 @endsection

 @push('page_script')
     @include('front-end.scripts_teacher')
 @endpush
