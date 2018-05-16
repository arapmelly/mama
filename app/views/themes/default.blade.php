<html>

<head>  





    {{HTML::style('node_modules/flag-icon-css/css/flag-icon.min.css')}}

    {{HTML::style('node_modules/font-awesome/css/font-awesome.min.css')}}
 
    {{HTML::style('node_modules/simple-line-icons/css/simple-line-icons.css')}}
    <!-- Main styles for this application-->

   {{HTML::style('css/bootstrap.min.css')}}

    

    
    
    <style type="text/css">

        .content {
            font-size:{{$template->text_body_fontsize}};
            font-family:{{$template->text_body_fontfamily}};
            color:{{$template->text_body_color}};
            font-weight:{{$template->text_body_fontweight}};
        }

        .title {
            font-size:{{$template->text_header_fontsize}};
            font-family:{{$template->text_header_fontfamily}};
            color:{{$template->text_header_color}};
            font-weight:{{$template->text_header_fontweight}};
        }

        
        .borderTop {
            border-top: {{$template->border_top_type}} {{$template->border_top_color}} {{$template->border_top_size}};
            
        }

        .borderBottom {
            border-bottom: {{$template->border_bottom_type}} {{$template->border_bottom_color}} {{$template->border_bottom_size}};
            
        }


        .borderLeft {
            border-left: {{$template->border_left_type}} {{$template->border_left_color}} {{$template->border_left_size}};
            
        }

        .borderRight {
            border-right: {{$template->border_right_type}} {{$template->border_right_color}} {{$template->border_right_size}};
            
        }


        .ntable {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
}

.ntable th,
.ntable td {
  padding: 5px;
  vertical-align: top;
  border-top: 0px solid #c8ced3;

}

.ntable-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }



    </style>


</head>

<body>



<div >

<page size="a4" style="padding:40px">

    <!-- personal details-->

    @if(Resume::SectionExist('personal', $resume->id))
    <div class="row borderBottom " style="padding-top:10px;">


        <div class="col-xs-12">

            <!-- <div class="header">
                <span class="text-uppercase ">{{Section::getSectionTitle($personal->section_id)}}</span>
        
            </div> -->

           <!--  @if($personal->photo != 'null')
            <div class="photo">
                <img src="{{asset('/tmp/'.$personal->photo)}}" width="150%" height="auto">
            </div>
            @endif -->
            
            <div class="content" >
                <div style="text-align:center; font-size:1.5em; font-weight:bold">{{$personal->fullname}}</div>
                <div style="text-align:center; " class="content">{{$personal->email}} | {{$personal->phone}}</div>
            </div>

            <br/>

        </div>


    </div>
    @endif


    <!-- Summary details-->
    @if(Resume::SectionExist('summary', $resume->id))
    <div class="row borderBottom">


        <div class=" col-xs-3  title ">
            <span class="text-uppercase">{{Section::getSectionTitle($summary->section_id)}}</span>
        </div>


        <div class="col-xs-9  content ">

            <span >{{$summary->summary}}</span>
            <br/><br/>
        </div>


    </div>
@endif


     <!-- work details-->
    @if(Resume::SectionExist('work', $resume->id))
    <div class="row borderBottom">


        <div class="col-xs-3 title">
            <span class="text-uppercase">{{Section::getSectionTitle($work_section_id)}}</span>

        </div>


        <div class="col-xs-9 content">

            @foreach($works as $cont)

                <div>{{Content::getPosition($cont->id)}}</div>
                <div class="title">{{Content::getInstitution($cont->id)}}</div>
                <div><span>{{Content::getStartDate($cont->id)}} <b>-</b> {{Content::getEndDate($cont->id)}}</span></div>
                <div>{{Content::getSummary($cont->id)}}</div>
                

                      <br>

            @endforeach

        </div>


    </div>
    @endif



     <!-- Education details-->
    @if(Resume::SectionExist('education', $resume->id))
    <div class="row borderBottom">


        <div class="col-xs-3 title">
            <span class="text-uppercase">{{Section::getSectionTitle($education_section_id)}}</span>

        </div>


        <div class="col-xs-9 content">

            @foreach($educations as $cont)

                <div>{{Content::getCourse($cont->id)}}</div>
                <div class="title">{{Content::getInstitution($cont->id)}}</div>
                <div><span>{{Content::getStartDate($cont->id)}} <b>-</b> {{Content::getEndDate($cont->id)}}</span></div>
                <div>Attained: {{Content::getGrade($cont->id)}}</div>
                

                      <br>

            @endforeach

        </div>


    </div>
    @endif


     <!-- Skills details-->
    @if(Resume::SectionExist('skill', $resume->id))
    <div class="row borderBottom">


        <div class="col-xs-3 title">
            <span class="text-uppercase">{{Section::getSectionTitle($skill_section_id)}}</span>

        </div>


        <div class="col-xs-9 content">

            @foreach($skills as $cont)

                <div class="title">{{Content::getSkill($cont->id)}}</div>
                <div>{{Content::getSkillDescription($cont->id)}}</div>
                

                      <br>

            @endforeach

        </div>


    </div>
    @endif
    
     <!-- Referees details-->
    @if(Resume::SectionExist('reference', $resume->id))
    <div class="row borderBottom">


        <div class="col-xs-3 title">
            <span class="text-uppercase">{{Section::getSectionTitle($referee_section_id)}}</span>

        </div>


        <div class="col-xs-9 content">

            @foreach($referees as $cont)

                <div class="title">{{Content::getRefName($cont->id)}}</div>
                <div>{{Content::getInstitution($cont->id)}}</div>
                <div>{{Content::getPosition($cont->id)}}</div>
                <div>{{Content::getRefPhone($cont->id)}}</div>
                <div>{{Content::getRefEmail($cont->id)}}</div>
                
                

                      <br>

            @endforeach

        </div>


    </div>
    @endif
    

</page>

</div>

</body>



</html>