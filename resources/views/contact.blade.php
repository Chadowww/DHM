@extends('layout')

@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900
            dark:text-white">Contactez nous</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Vous avez besoin de notre assistance pour résoudre un problème technique ? Vous avez des commentaires à partager sur nos services de dépannage informatique ? Faites-le nous savoir en remplissant le formulaire ci-dessous.</p>
            <form action="#" class="space-y-8">
                <div class="md:flex justify-between ">
                    <div class="md:w-3/5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900
                    dark:text-gray-300">Votre adresse mail :</label>
                        <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900
                    text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5
                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                    dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                               placeholder="adresse@mail.fr" required>
                    </div>
                   <div>
                       <label for="email" class="block mb-2 text-sm font-medium text-gray-900
                    dark:text-gray-300">Votre téléphone :</label>
                       <input type="tel" id="phone" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900
                    text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5
                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                    dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                              placeholder="061234678" required>
                   </div>
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900
                    dark:text-gray-300">Sujet :</label>
                    <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50
                    rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500
                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                    dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                           placeholder="Dites nous comment on peut vous aider?" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900
                    dark:text-gray-400">Votre messages</label>
                    <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
                    rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500
                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                    dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Votre message ici...
                    ."></textarea>
                </div>
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg
                bg-[#37a6dd] sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300
                dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Envoyer</button>
            </form>
        </div>
    </section>
@endsection
