@extends('admin.layouts.master')


@section('content')
        <div class="row">
            <div class="span6">
                <div class="widget widget-nopad">
                     <!-- widget-header -->
                    <div class="widget-header">
                        <i class="icon-list-alt"></i>
                         <h3> Create New Bot Blueprint </h3>
                    </div>
                    <!-- /widget-header -->
                      <!-- widget-content -->
                     <div class="widget-content">
                       @if(Session::has('success'))
                         <div class="alert alert-success">{{ Session::get('success') }}</div>
                       @endif
                        <form action="{{ URL::to('gamemechanics/createbot') }}" method="post" id="edit-profile" class="form-horizontal" enctype="multipart/form-data">
                                <br />
                                <div class="control-group">
                                    <label class="control-label" for="email">Bot Email</label>
                                    <div class="controls">
                                        <input type="text" class="span4" id="email" name="email" placeholder="Email">
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->

                                <div class="control-group">
                                    <label class="control-label" for="first_name">Name</label>
                                    <div class="controls">
                                        <input type="text" class="span4" id="first_name" name="first_name" placeholder="Name">
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->

                                <div class="control-group">
                                    <label class="control-label" for="password">Password</label>
                                    <div class="controls">
                                        <input type="password" class="span4" id="password" name="password" placeholder="Password">
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->

                                <div class="control-group">
                                    <label class="control-label" for="title">Confirm Password</label>
                                    <div class="controls">
                                        <input type="password" class="span4" id="password_confirm" name="password_confirm" placeholder="Confirm Password">
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->

                                <div class="control-group">
                                        <label class="control-label" for="dob">Date of Birth</label>
                                        <div class="controls">
                                            <input type="text" id="dob" name="dob" placeholder="Date of Birth">
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->          


                                <div class="control-group">
                                  <label class="control-label" for="photo">Profile Photo</label>
                                  <div class="controls">
                                    <input type="file" class="span4" id="photo" name="photo" >
                                  </div> <!-- /controls -->
                                </div> <!-- /control-group -->

                                <div class="control-group">                                            
                                    <label class="control-label">Gender</label>
                                    <div class="controls">
                                        <label class="radio inline">
                                            <input type="radio"  value="male" name="gender"> Male
                                        </label>
                                            
                                        <label class="radio inline">
                                            <input type="radio" value="female" name="gender" checked> Female
                                        </label>
                                    </div>    <!-- /controls -->
                                </div> <!-- /control-group -->

                               <div class="control-group">
                                    <label class="control-label" for="country">Country</label>
                                    <div class="controls">
                                        {{ Form::select('country',  $country_list) }}
                                    </div> <!-- /controls -->
                                </div> 

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div> <!-- /form-actions -->

                                 @if(Session::has('errors'))
                                      <span style="color: red;"> {{ $errors->first('email'); }} </span><br>
                                      <span style="color: red;"> {{ $errors->first('password'); }} </span><br>
                                      <span style="color: red;"> {{ $errors->first('password_confirm'); }} </span>
                                 @endif

                        </form><!-- /form -->

                    </div>  <!-- /widget content -->
                 </div>
                 <!-- /widget -->
            </div>
            <!-- /span6 -->


            <div class="span6">
                <div class="widget widget-nopad">
                     <!-- widget-header -->
                    <div class="widget-header">
                        <i class="icon-list-alt"></i>
                         <h3> Settings </h3>
                    </div>
                    <!-- /widget-header -->
                      <!-- widget-content -->
                     <div class="widget-content">
                       @if(Session::has('success_setting'))
                         <div class="alert alert-success">{{ Session::get('success_setting') }}</div>
                       @endif
                        <form action="{{ URL::to('gamemechanics/settings') }}" method="post" id="sendmsg" class="form-horizontal">
                                <br />
                                

                               <div class="control-group">
                                    <label class="control-label" for="no_bots">Number of User Bots To Be Created For Empty Search </label>
                                    <div class="controls">
                                        <input type="number" class="span4" id="no_bots" name="no_bots" placeholder="Number" value="{{$no_bots}}">
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->


                                <div class="control-group">
                                  <label class="control-label" for="userbotgender">User Bot Gender</label>
                                  <div class="controls">
                                  <select name="userbotgender">
                                    <option value="opposite"  @if($userbotgender == 'opposite')  selected="selected" @endif>Opposite Gender</option>
                                    <option value="same" @if($userbotgender == 'same')  selected="selected" @endif >Same Gender</option>
                                    <option value="both"  @if($userbotgender == 'both')  selected="selected" @endif>Both Genders</option>
                                  </select>
                                </div>
                                </div> <!-- /controls -->


                             <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div> <!-- /form-actions -->
                        </form><!-- /form -->

                    </div>  <!-- /widget content -->
                 </div>
                 <!-- /widget -->
            </div>
            <!-- /span6 -->

        </div>
        <!-- /row -->

	      <div class="row">

	      	<div class="span12">

	      		<div class="widget ">

	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Bot Blueprints</h3>
	  				</div> <!-- /widget-header -->

					<div class="widget-content">

                        <table id="example" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                      <th style="width:4%">id</th>
                                      <th>Photo</th>
                                      <th>Name</th>
                                      <th>Gender</th>
                                      <th>Email</th>
                                      <th style="width:4%">Date of Birth</th>
                                      <th>Country</th>
                                      <th style="width:5%">Status</th>
                                      <th style="width:6%">Action</th>
                                    </tr>
                                </thead>



                                <tbody>
                                    @foreach($bots as $bot)
                                    <tr>
                                        <td>{{ $bot->id }}</td>

                                        @if($bot->photo_id == '')
                                          <td><img class="img" src="{{ URL::to('uploads/app/male-thumbnail.jpg') }}" style="width:70px;height:70px"/></td>

                                        @else
                                        
                                          <td><img class="img" src="{{ URL::to('uploads/photos/'.$bot->photo_id) }}" style="width:70px;height:70px"/></td>
                                        @endif
                                        <td>{{ $bot->first_name }}</td>
                                        <td>{{ $bot->gender }}</td>
                                        <td>{{ $bot->email }}</td>
                                        <td>{{ $bot->dob }} </td>
                                        <td>{{ $bot->country }}</td>

                                        @if($bot->activated) <td style="color:#00ba8b;">Enabled </td>@else <td style="color:#dc4539;">Disabled</td>@endif
                                        @if(!$bot->activated)

                                        <td data-botid='{{$bot->id}}' >

                                            <select class="span2 act_sel" name="act_selection"  >
                                                <option>Select</option>
                                                <option value="enable">Enable</option>
                                                <option value="delete">Delete</option>
                                            </select>
                                        </td>
                                        @else
                                        <td data-botid='{{$bot->id}}' >
                                            <select class="span2 act_sel" name="act_selection" >
                                                <option>Select</option>
                                                <option value="disable">Disable</option>
                                                <option value="delete">Delete</option>
                                                <option value="change_pass">Reset Password</option>
                                            </select>
                                        </td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>


					</div> <!-- /widget-content -->

				</div> <!-- /widget -->

		    </div> <!-- /span8 -->

	      </div> <!-- /row -->



<div id="dialog_disable" title="DISABLE" class="hide">
    <p> Are you sure to DISABLE this Bot Blueprint ?</p>
</div>

<div id="dialog_enable" title="DISABLE" class="hide">
    <p> Are you sure to ENABLE this Bot Blueprint ?</p>
</div>

<div id="dialog_delete" title="DELETE" class="hide">
    <p> Are you sure to DELETE this Bot Blueprint ?</p>
</div>


<div id="dialog_password" title="New Password" class="hide">
    <form action="{{URL::to('/gamemechanics/newpassword')}}" id="password-form" class="form-horizontal" method="post">
        <label class="control-label"> </label>
        <input type="password"  class="m-wrap" name="new_password" id="new_password" placeholder="New Password" />
        <input type="text" class="m-wrap hide" name="botid" id="botid" />
    </form>
</div>


@stop





@section('custom-js')

 <script src="{{ URL::to('/timepicker/jquery.timepicker.min.js') }}"></script>







<script type="text/javascript">

$(document).ready(function() {
    $('#example').DataTable()

});


$(function() {
    $( "#dob" ).datepicker({dateFormat : 'yy-mm-dd'});
});

    $( "#dialog_delete" ).dialog({
        resizable: false,
        autoOpen: false,
        height: 210,
        modal: true,
        buttons: [
        {
            'class' : 'btn green',
            "text" : "Delete",
            click: function() {
            var self = this;
                $.post("{{ URL::to('/gamemechanics/deletebotblueprint') }}",{'id' : $(this).data('id')},function() {
                    $(self).dialog( "close" );
                    window.location.reload();
            });
            }
        },
        {
            'class' : 'btn',
            "text" : "Cancel",
            click: function() {
                $(selected_option_element).val(0);
                $(selected_option_element).trigger("liszt:updated");

                $(this).dialog( "close" );
            }
        }]
    });

    $( "#dialog_disable" ).dialog({
        resizable: false,
        autoOpen: false,
        height: 210,
        modal: true,
        buttons: [
        {
            'class' : 'btn green',
            "text" : "Disable",
            click: function() {
            var self = this;
                $.post("{{ URL::to('/gamemechanics/disablebotblueprint') }}",{'id' : $(this).data('id')},function() {
                    $(self).dialog( "close" );
                    window.location.reload();
            });
            }
        },
        {
            'class' : 'btn',
            "text" : "Cancel",
            click: function() {
                $(selected_option_element).val(0);
                $(selected_option_element).trigger("liszt:updated");

                $(this).dialog( "close" );
            }
        }]
    });

    $( "#dialog_enable" ).dialog({
        resizable: false,
        autoOpen: false,
        height: 210,
        modal: true,
        buttons: [
        {
            'class' : 'btn green',
            "text" : "Enable",
            click: function() {
            var self = this;
                $.post("{{ URL::to('/gamemechanics/enablebotblueprint') }}",{'id' : $(this).data('id')},function() {
                    $(self).dialog( "close" );
                    window.location.reload();
            });
            }
        },
        {
            'class' : 'btn',
            "text" : "Cancel",
            click: function() {
                $(selected_option_element).val(0);
                $(selected_option_element).trigger("liszt:updated");

                $(this).dialog( "close" );
            }
        }]
    });

    $( "#dialog_password" ).dialog({
  	      	autoOpen: false,
  	      	resizable: false,
  	      	height: 210,
  	      	modal: true,
  	      	buttons: [
  	      	{
  	      		'class' : 'btn green',
  	      		"text" : "Reset",
  	      		click: function() {
  	      			$("#password-form").submit();
          			$(this).dialog( "close" );
        			}
  	      	},
  	      	{
  	      		'class' : 'btn',
  	      		"text" : "Cancel",
  	      		click: function() {
  	      			$(selected_option_element).val(0);
              		$(selected_option_element).trigger("liszt:updated");
          			$(this).dialog( "close" );
        			}
  	      	}]
  	    });

$(".act_sel").change(function(e){
		 	var selected_option = $(e.target).val();
		 	var bot_id = $($(e.target).parent()).data('botid');

		 	selected_option_element = e.target;

		 	if(selected_option == 'delete'){
		 		$("#dialog_delete").data('id', bot_id);
				$( "#dialog_delete" ).dialog( "open" );

		 	} else if(selected_option == 'disable'){
        $("#dialog_disable").data('id', bot_id);
        $( "#dialog_disable" ).dialog( "open" );
      } 
      else if(selected_option == 'enable'){
        $("#dialog_enable").data('id', bot_id);
        $( "#dialog_enable" ).dialog( "open" );
      }
      else if(selected_option == 'change_pass'){

		 		var this_url="{{URL::to('/gamemechanics/newpassword')}}";
		 		var data_url= this_url + bot_id;
		 		$("#botid").val(bot_id);
		 		$("#dialog_password").data('url', data_url);
				$( "#dialog_password" ).dialog( "open" );
		 	}
		})


</script>

@stop
