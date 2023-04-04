<x-app-layout>
    <div class="container mx-auto">
        <br />
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
            <thead>
                <tr class="text-center font-bold">
                    <td class="border px-6 py-4">ID</td>
                    <td class="border px-6 py-4">Adresse</td>
                    <td class="border px-6 py-4">CP</td>
                    <td class="border px-6 py-4">Ville</td>
                    <td class="border px-6 py-4">Pays</td>
                    <td class="border px-6 py-4">Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($adresses as $adresse)
                    <tr>
                    <form action="{{ route('adresses.update', $adresse['id']) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method("PUT")
                        <td class="border px-6 py-4"> {{ $adresse['id'] }}</td>
                        <td class="border px-6 py-4"> <input type="text" name="adresseFormulaire" value=" {{$adresse['adresse']}} " /></td>
                        <td class="border px-6 py-4"> <input type="text" name="cpFormulaire" value=" {{$adresse['CP']}} "/></td>
                        <td class="border px-6 py-4"> <input type="text" name="ville" value=" {{$adresse['Ville']}} " /></td>
                        <td class="border px-6 py-4"> <input type="text" name="pays" value=" {{$adresse['Pays']}} "/></td>
                        <td class="border px-6 py-4">
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" >Modifier</button>
                    </form>
                            <form action="{{ route('adresses.destroy', $adresse['id']) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method("DELETE")
                                
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

<script>
    function editRow(id) {
        const row = document.querySelector(`#row-${rowNumber}`);
        const tds = row.querySelectorAll('td');

        // remplace les <td> par des <input>
        for (const td of tds) {
            const value = td.textContent;
            td.innerHTML = `<input type="text" value="${value}">`;
        }
    }
</script>