<div>
    <div>
        <table>
            <thead >
                <tr >
                    <td >
                       Paciente
                    </td>
                    <td>
                       Cedula
                     </td>
                     <td>
                       Sintoma
                     </td>
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
