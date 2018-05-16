
            @if($template->layout == 'stylish')
              
              @include('themes/stylish')

            @elseif($template->layout == 'default')

              @include('themes/default')

            @elseif($template->layout == 'mono')

              @include('themes/mono')

            @elseif($template->layout == 'swiss')

              @include('themes/swiss')

            @endif