@php
if(request()->routeIs('Activities')){
    $school = 'color:white; background-color:#020ab9;';
    }else{
        $school = 'black';
    }
    if(request()->routeIs('Computer')){
        $comp = 'color:white; background-color:#020ab9;';
    }else{
        $comp = 'color:black';
    }
    if(request()->routeIs('Music')){
        $mdd = 'color:white; background-color:#020ab9;';
    }else{
        $mdd = 'color:black';
    }
    if(request()->routeIs('Physical Education')){
        $pe = 'color:white; background-color:#020ab9;';
    }else{
        $pe = 'color:black';
    }
    if(request()->routeIs('Sponsorships')){
        $sponsor = 'color:white; background-color:#020ab9;';
    }else{
        $sponsor = 'color:black';
    }
@endphp
<ul>
    <li><a style="{{$school}}" href="{{\URL::signedRoute("Activities",['id' => 2022, 'schools' => "Pre-primary,Primary,Secondary and Tertiary", 'organiztion' => 'joomesupport'])}}"><i class='bx bxs-dashboard'></i> Schools</a></li>
    <li><a style="{{$comp}}" href="{{\URL::signedRoute("Computer",['id' => 2022, 'Computer Study' => "Theory and Practicles", 'organiztion' => 'joomesupport'])}}" ><i class='bx bx-cart'></i> Computer</a></li>
    <li><a style="{{$mdd}}" href="{{\URL::signedRoute("Music",['id' => 2022, 'MDD' => "Music Dance and Drama skills", 'organiztion' => 'joomesupport'])}}"><i class='bx bx-download'></i> Music</a></li>
    <li><a style="{{$pe}}" href="{{\URL::signedRoute("Physical Education",['id' => 2022, 'Sports' => "Games and Sports Skills", 'organiztion' => 'joomesupport'])}}"><i class='bx bx-home-alt'></i> Physical Education</a></li>
    <li><a style="{{$sponsor}}" href="{{\URL::signedRoute("Sponsorships",['id' => 2022, 'Sponsers' => "sponsering vulnerable children", 'organiztion' => 'joomesupport'])}}"><i class='bx bx-edit'></i> Sponsorships</a></li>
</ul>