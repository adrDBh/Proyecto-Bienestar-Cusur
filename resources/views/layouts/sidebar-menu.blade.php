<?php
# DRY URLS
$NurseryURL = url('nursery/create');
$MedicsURL = url('medics/create');
$SlpceURL = url('slpce/create');
$NutURL = url('nutriology/create');
$LabsURL = url('labs/create');
$ReportsURL = url('reports/create');
?>
<div class="list-group sidebar-list">
    <li><a href="{{url('/')}}" class="list-group-item active text-center"><i class="fa fa-home"></i> Inicio</a></li>
    <li><a href="{{ $NurseryURL }}" class="list-group-item text-center"><i class="fa fa-stethoscope"></i> Enfermería</a>
    </li>
    <li><a href="{{ $MedicsURL }}" class="list-group-item text-center"><i class="fa fa-user-md"></i> Médicos</a></li>
    <li><a href="{{ $SlpceURL }}" class="list-group-item text-center"><i class="fa fa-ambulance"></i> SLPCE</a></li>
    <li><a href="{{ $NutURL }}" class="list-group-item text-center"><i class="fa fa-cutlery"></i> Nutriología</a></li>
    <li><a href="{{ $LabsURL }}" class="list-group-item text-center"><i class="fa fa-flask"></i> Laboratoriales</a></li>
    <li><a href="{{ $ReportsURL }}" class="list-group-item text-center"><i class="fa fa-folder"></i> Reportes</a></li>
</div>
