<div>
    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col" style="color: red">Paciente</th>
                <th scope="col" style="color: red">Cedula</th>
                <th scope="col" style="color: red">Sintoma</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($s as $item)
                    <tr>
                        <td>
                            {{$item->nombre}}
                             {{$item->apellido}}
                        </td>
                        <td>
                            {{$item->cedula}}
                        </td>
                        <td>
                            {{$item->nomsinto}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
    
</div>
