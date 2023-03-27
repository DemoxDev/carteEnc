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
            <td class="border px-6 py-4">Nom</td>
            <td class="border px-6 py-4">Prénom</td>
            <td class="border px-6 py-4">Email</td>
            <td class="border px-6 py-4">Numéro de téléphone</td>
            <td class="border px-6 py-4">CV</td>
            <td class="border px-6 py-4">Date entrée ENC</td>
            <td class="border px-6 py-4">Section</td>
        </tr>
        </thead>
        <tbody>

        @foreach($cartesEtudiant as $carteEtudiant)
            <tr>
                <td class="border px-6 py-4">{{$carteEtudiant['id']}}</td>
                <td class="border px-6 py-4">{{$carteEtudiant['nomEtudiant']}}</td>
                <td class="border px-6 py-4">{{$carteEtudiant['prenomEtudiant']}}</td>
                <td class="border px-6 py-4">{{$carteEtudiant['email']}}</td>
                <td class="border px-6 py-4">{{$carteEtudiant['numero']}}</td>
                <td class="border px-6 py-4">{{$carteEtudiant['nomcv']}}</td>
                <td class="border px-6 py-4">{{$carteEtudiant['date_entree']}}</td>
                <td class="border px-6 py-4">{{$carteEtudiant['section']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
