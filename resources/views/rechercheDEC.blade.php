<fieldset style="display:block;">
    <legend>Rechercher les candidats d'une option</legend>
    <form action="{{ route('recherche') }}" method="get" style="display: flex; align-items: center; gap: 20px;">
        @csrf
        <div style="display: flex; flex-direction: column; gap: 10px;">
            <div>
                <label>Dans l'option</label>
                <select name="recherche">
                    @foreach ($options as $option)
                        {{-- @dd($option) --}}
                        <option value="{{$option->id}}">{{$option->code_opt}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Envoyer</label>
                <button type="submit">OK</button>
            </div>
        </div>
    </form>
</fieldset>

<h1>LISTE DES ETUDIANTS</h1>
<table style="border-collapse: collapse; width: 100%;">
    <tr>
        <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Nom</th>
        <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Prenom</th>
        <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Sexe</th>
    </tr>
    @foreach ($etudiants as $etudiant)
        <tr>
            <td style="border: 1px solid #dddddd; text-align: left;padding: 8px; background-color: #f2f2f2;"> {{$etudiant->nom}} </td>
            <td style="border: 1px solid #dddddd; text-align: left;padding: 8px; background-color: #f2f2f2;"> {{$etudiant->prenom}} </td>
            <td style="border: 1px solid #dddddd; text-align: left;padding: 8px; background-color: #f2f2f2;"> {{$etudiant->sexe}} </td>
        </tr>
    @endforeach
</table>