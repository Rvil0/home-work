@section("title-name")Личный кабинет@endsection
@extends('layouts.app')
@section("content")
  <div class="basis-full bg-fixed no-repeat bg-cover bg-no-repeat" style="background-image: url(https://synergy.ru/assets/upload/wallpaper/8/1280x1024.jpg)" >

              <div class="flex justify-center backdrop-blur-sm" >

                    <div class="h-screen w-2/4">

                        <!-- Информация -->
                         <div class="bg-gradient-to-r from-sky-500 to-indigo-500 px-3 py-3 mt-32 border shadow-2xl rounded-2xl opacity-80 border-4 border-rose-500 ">

                                      <label class="text-lg font-semibold"> Данные пользователя </label>
                                      <a href="{{ route('update-info') }}" class="ml-32 border rounded-md py-0.5 px-1 text-gray-400 hover:bg-neutral-400 hover:text-white ">Изменить</a>



                                      <div class=" mx-3 my-6">
                                            <!-- имя-->
                                            <label class="text-sm ">Имя</label><br/>
                                            <span class="text-white font-bold text-lg border-gray-400 border-b-2">{{ Auth::user()->name }}</span><br/>
                                       </div>

                                      <div class=" mx-3 my-6">
                                            <!-- фамилия-->
                                            <label class="text-sm ">Фамилия</label><br/>
                                            <span class="text-white font-bold text-lg border-gray-400 border-b-2">{{ Auth::user()->surname }}</span><br/>
                                      </div>

                                      <div class=" mx-3 my-6">
                                            <!-- почта -->
                                            <label class="text-sm ">Email</label><br/>
                                            <span class="text-white font-bold text-lg border-gray-400 border-b-2">{{ Auth::user()->email }}</span><br/>
                                      </div>

                                      <div class=" mx-3 my-6">
                                            <!-- номер-->
                                            <label class="text-sm ">Ваш номер</label><br/>
                                            <span class="text-white font-bold text-lg border-gray-400 border-b-2">{{ Auth::user()->number }}</span><br/>
                                      </div>

                                      <div class=" mx-3 my-6">
                                            <!-- о себе -->
                                            <label class="text-sm ">О себе</label><br/>
                                            <span class="text-white font-bold text-lg border-gray-400 border-b-2">{{ Auth::user()->aboutme }}</span><br/>
                                      </div>
                         </div>

                    </div>
              </div>
        </div>
@endsection
