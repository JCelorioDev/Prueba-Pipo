<div>
    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col" style="color: red">Paciente</th>
                <th scope="col" style="color: red">Medico</th>
                <th scope="col" style="color: red">Sintoma</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($mdfp as $item)
                   <tr>
                    <th scope="row">{{$item->nombre}} {{$item->apellido}}</th>
                    <td>
                        {{$item->nom_m}}
                        {{$item->ape_m}}
                    </td>
                    <td>{{$item->nomsinto}}</td>
                   </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</div>
