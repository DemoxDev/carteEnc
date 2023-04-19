<x-app-layout>
<div class="container mx-auto">
    <br />
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
        <thead>
        <tr class="text-center font-bold">
            <td class="border px-6 py-4">ID</td>
            <td class="border px-6 py-4">ID de l'étudiant</td>
            <td class="border px-6 py-4">Nom de l'entreprise</td>
            <td class="border px-6 py-4">Ville</td>
            <td class="border px-6 py-4">Date début de stage</td>
            <td class="border px-6 py-4">Date fin de stage</td>
            <td class="border px-6 py-4">Actions</td>
        </tr>
        </thead>
        <tbody>

        @foreach($stagesEtudiant as $stageEtudiant)
            <tr>
                <form action="{{ route('stages.update', $stageEtudiant['id']) }}" method="POST" style="display:inline-block;">
                @csrf
                @method("PUT")
                    <td class="border px-6 py-4">{{$stageEtudiant['id']}}</td>
                    <td class="border px-6 py-4">{{$stageEtudiant['id_Etudiant']}}</td>
                    <td class="border px-6 py-4"> <input type="text" name="nomEntrepriseFormulaire" value="{{$stageEtudiant['nomEntreprise']}}" /></td>
                    <td class="border px-6 py-4"> <input type="text" name="villeEntrepriseFormulaire" value="{{$stageEtudiant['villeEntreprise']}}"/></td>
                    <td class="border px-6 py-4"> <input type="text" name="dateDebut" value="{{$stageEtudiant['dateDebut']}}" /></td>
                    <td class="border px-6 py-4"> <input type="text" name="dateFin" value="{{$stageEtudiant['dateFin']}}" /></td>
                    <td class="border px-6 py-4">
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-black font-bold py-2 px-4 rounded" >Modifier</button>
                    </form>
                            <form action="{{ route('stages.destroy', $stageEtudiant['id']) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method("DELETE")

                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Supprimer</button>
                            </form>
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
