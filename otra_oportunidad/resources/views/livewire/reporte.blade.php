<div class="justify-content-center" style="position: relative; left: 50px;">
    <div class="col-6 " style="position: relative; top: 60px">
        <div class="card ">
            <div class="card-header">
                <h5 class="card-title">Reportes</h5>
            </div>
            <div class="card-body">
                    <div class="mb-3">
                        <form>
                        <label class="form-label">Sintoma</label>
                        <input type="text" class="form-control" wire:model="nomSintoma">
                        <a href="{{url('Reporte1'.$nomSintoma)}}">Reporte de Paciente con Sintomas</a>
                        </form>
                    </div>
                    <div>
                        <form>
                            <a href="{{url('Reporte2')}}">Reporte de Pacientes</a>
                        </form>   
                    </div>     
            </div>
        </div>
    </div>
</div> 

