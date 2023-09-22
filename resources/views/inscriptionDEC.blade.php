<h1>INSCRIPTION</h1>
<fieldset style="display:block;">
    <legend>Renseignement</legend>
    <form action="{{ route('inscription.store') }}" method="POST">
        @csrf
        <div>
            <label> Nom</label> 
            <input type="text" name="nom"> 
        </div>
        <div>
            <label> Prenom</label> 
            <input type="text" name="prenom"> 
        </div>
        <div>
            <label > Date de naissance</label> 
            <input type="date" name="datenais"> 
        </div>
        <div>
            <label> Ville</label> 
            <input type="text" name="ville"> 
        </div>
        <div>
            <label> Sexe</label> 
            <input type="text" name="sexe"> 
        </div>
        <div>
            <label>Option</label>
            <select name="option_id">
                @foreach ($options as $option)
                    {{-- @dd($option) --}}
                    <option name="{{$option->id}}">{{$option->code_opt}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="reset">Effacer</button>
            <button type="submit">Enregistrer</button>
        </div>
    </form>
</fieldset>