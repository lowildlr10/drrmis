<div id="addModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 href="#" data-toggle="tooltip"  title="Note: You can only upload PDF files here." class="modal-title">Upload new file <i class="fa fa-info-circle" text-align="right" aria-hidden="true"></i></h4>
        </div>   
        <form id="saveRiskassess" method="post" action="{{action('RiskassessController@saveRiskassess')}}" enctype="multipart/form-data">   
        <div class="modal-body">
  
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                      <label for="text">File Name to Display:</label>
                      <input type="text" name="filename" class="form-control" id="filename">
                    </div>
                    <div class="form-group">
                      <label for="pwd"><i class="fa fa-folder-open" aria-hidden="true"></i> File:</label>
                      <input type="file" name="fileUploadName" id="fileUploadName">
                    </div>		  			  	
        </div>    
           
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-submitmodal">Upload</button>
          <a type="button" class="btn btn-danger" data-dismiss="modal">Cancel</a>        
        </div>
        </form>
      </div>
    </div>
  </div>