@extends('layout')

@section('content')
    <div class="bg-[#37a6dd]">
        <div class="contact bg-white mb-48" style="
       clip-path: polygon(33% 15%, 68% 15%, 100% 0, 100% 85%, 66% 100%, 33% 100%, 0 85%, 0 0);
">
            <div class="md:bg-[url('/public/images/img-home2.jpeg')] bg-fixed h-[35vh] lg:h-[80vh] bg-cover
        flex items-center
        ">
                <div class="contact-title fixed md:w-1/2 flex justify-center items-center p-32">
                    <div>
                        <h1 class="text-black text-center text-2xl lg:text-5xl leading-tight font-medium my-5
                    lg:mb-10">DHM INFORMATIQUE</h1>
                        <h2 class="text-black text-center lg:text-2xl font-light">
                            Bienvenue sur le site de DHM Informatique, <br>
                            Spécialiste de la vente et du dépannage informatique pour particuliers et professionnels,
                            nous serons heureux de vous accueillir dans notre atelier au 43 rue Thiers à Libourne afin de
                            résoudre vos problèmes. <br>
                            Nous vous proposons une large gamme de matériels et périphériques informatiques.

                            Nous assurons tous types de services informatiques. Du plus simple au plus complexe !</h2>
                        <ButtonContact />
                    </div>
                </div>
            </div>
        </div>
        <div class="relative bg-white mb-48" style="
clip-path: polygon(33% 0, 66% 0, 100% 15%, 100% 100%, 66% 85%, 33% 85%, 0 100%, 0 15%);">
            <div class="md:bg-[url('/public/images/img_1.png')] bg-fixed h-[35vh] lg:h-[80vh] bg-cover
        flex justify-end items-center">
                <div class="fixed top-[30%] md:w-1/3 p-2">
                    <div class="flex-col  justify-center items-center">

                        <table class="">
                            <thead class="text-black text-center lg:text-2xl font-light h-24">
                            <tr>
                                <th colspan="2" class="text-black text-center lg:text-3xl font-bold">
                                    Horaires d'ouverture de l'atelier
                                </th>
                            </tr>
                            </thead>
                            <tbody class="text-black">
                            <tr>
                                <td class="text-black text-center lg:text-2xl font-light">Lundi</td>
                                <td class="text-black text-center lg:text-2xl font-light">9h30-12h30 / 14h-19h</td>
                            </tr>
                            <tr>
                                <td class="text-black text-center lg:text-2xl font-light">Mardi</td>
                                <td class="text-black text-center lg:text-2xl font-light">9h30-12h30 / 14h-19h</td>
                            </tr>
                            <tr>
                                <td class="text-black text-center lg:text-2xl font-light">Mercredi</td>
                                <td class="text-black text-center lg:text-2xl font-light">9h30-12h30 / 14h-19h</td>
                            </tr>
                            <tr>
                                <td class="text-black text-center lg:text-2xl font-light">Jeudi</td>
                                <td class="text-black text-center lg:text-2xl font-light">9h30-12h30 / 14h-19h</td>
                            </tr>
                            <tr>
                                <td class="text-black text-center lg:text-2xl font-light">Vendredi</td>
                                <td class="text-black text-center lg:text-2xl font-light">9h30-12h30 / 14h-19h</td>
                            </tr>
                            <tr>
                                <td class="text-black text-center lg:text-2xl font-light">Samedi</td>
                                <td class="text-black text-center lg:text-2xl font-light">9h30-12h30 / 14h-19h</td>
                            </tr>
                            </tbody>
                        </table>
                        <ButtonContact />
                    </div>
                </div>
            </div>
        </div>
        <div class="contact bg-white" style="
clip-path: polygon(33% 0, 69% 0, 100% 15%, 100% 100%, 66% 100%, 33% 100%, 0 100%, 0 15%);
">
            <div class="md:bg-[url('/public/images/img-home2.jpeg')] bg-fixed h-[35vh] lg:h-[80vh] bg-cover
        flex items-center
        ">
                <div class="contact-title fixed md:w-1/2 flex justify-center items-center p-2">
                    <div>
                        <h1 class="text-black text-center text-2xl lg:text-5xl leading-tight font-medium my-5 lg:mb-10">DHM
                            informatique</h1>
                        <h2 class="text-black text-center lg:text-2xl font-light">
                            Bienvenue sur le site de DHM Informatique, <br>
                            Spécialiste de la vente et du dépannage informatique pour particuliers et professionnels,
                            nous serons heureux de vous accueillir dans notre atelier au 43 rue Thiers à Libourne afin de
                            résoudre vos problèmes. <br>
                            Nous vous proposons une large gamme de matériels et périphériques informatiques.

                            Nous assurons tous types de services informatiques. Du plus simple au plus complexe !</h2>
                        <ButtonContact />
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
