<x-app-layout>
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Informations personnelles</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Utilisez une adresse email permanente pour recevoir vos courriels
                    </p>
                </div>
            </div>
            <div class="mt-2 md:mt-0 md:col-span-2">
                <form method="post" action="{{url('demandeCarte')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                @if ($errors->any())
                                    <x-validation-errors class="mb-4" />
                                @endif
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nomEtudiantFormulaire">Nom étudiant:</label><br>
                                    <input type="text" class="form-control" name="nomEtudiantFormulaire">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="prenomEtudiantFormulaire">Prénom étudiant:</label><br>
                                    <input type="text" class="form-control" name="prenomEtudiantFormulaire">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email">Email:</label><br>
                                    <input type="text" class="form-control" name="email">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="numero">Numéro de téléphone:</label><br>
                                    <input type="number" class="form-control" name="numero">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="cv">CV:</label><br>
                                    <input type="file" class="form-control" name="cv">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="date_entree">Date entrée ENC :</label><br>
                                    <input type="date" class="form-control" name="date_entree">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="date_entree">Section :</label><br>
                                    <select name="section" id="section">
                                        <option value="slam">SIO SLAM</option>
                                        <option value="sisr">SIO SISR</option>
                                    </select>
                                </div>

                                

                                
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
