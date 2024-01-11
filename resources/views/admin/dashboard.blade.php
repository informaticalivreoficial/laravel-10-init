<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <aside 
        class="
            shadow-[0_14px_28px_rgba(0,0,0,0.25),0_10px_10px_rgba(0,0,0,0.22)]
            bg-white 
            h-screen 
            overflow-y-hidden
            w-[250px]
            ">
        <!-- Brand Logo -->
        @php
            if(!empty(\Illuminate\Support\Facades\Auth::user()->avatar) &&
            \Illuminate\Support\Facades\File::exists(public_path() . '/storage/' . \Illuminate\Support\Facades\Auth::user()->avatar)){
                $cover = \Illuminate\Support\Facades\Auth::user()->url_avatar;
            } else {
                $cover = url(asset('backend/assets/images/image.jpg'));
            }
        @endphp
        <a href="#" class="border-b-[#dee2e6] border-b border-solid">                    
            <img width="" height="" src="" alt="" class="">
        </a>

        <!-- Sidebar -->
        <div class="px-2 py-0">
            <!-- Sidebar user panel (optional) -->
            <div class="flex">
                <div class="h-auto w-[2.1rem]">
                    <img class="rounded-[50%] shadow-[0_3px_6px_rgba(0,0,0,0.16),0_3px_6px_rgba(0,0,0,0.23)]" src="{{$cover}}" alt="">
                </div>
                <div class="info">
                    <a href="" class="d-block">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="">
                   
                    <li class="">
                        <a href="" class="">
                            <i class=""></i>
                            <p>Painel de Controle</p>
                        </a>
                    </li> 
                    {{-- Menu Clientes --}}
                    <li class="">
                        <a href="" class="">
                            <i class=""></i>
                            <p>
                                Usuários
                                <i class=""></i>
                            </p>
                        </a>
                        <ul class="">                            
                            <li class="">
                                <a href="" class="">
                                    <i class=""></i>
                                    <p>Time</p>
                                </a>
                            </li>
                            <li class="">
                                <a href="" class="">
                                    <i class=""></i>
                                    <p>Criar Novo</p>
                                </a>
                            </li>
                        </ul>
                    </li>   
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
