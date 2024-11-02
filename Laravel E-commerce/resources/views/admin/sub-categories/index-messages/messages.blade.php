@if(session()->has('Sub-Category_Created_Sucessfully'))
<div class="alert alert-success text-center mx-auto shadow-lg" style="max-width: 550%; margin-top: 3%; border-radius: 15px; padding: 15px; background-color: #0f9311; color: white; position: relative; overflow: hidden; box-shadow: 0 0 15px rgba(0, 0, 0, 0.3); transition: transform 0.3s; animation: scaleUp 1.5s infinite;">
    <h4 class="font-weight-bold">
        <i class="fas fa-check-circle" style="display: inline-block; animation: bounceIcon 1.5s infinite;"></i>
        <span style="display: inline-block; animation: flashText 2s infinite;">
            {{ session()->get('Sub-Category_Created_Sucessfully') }}
        </span>
    </h4>
</div>
@elseif (session()->has('Updated_Sub-Category_Successfully'))
<div class="alert alert-success text-center mx-auto shadow-lg" style="max-width: 550%; margin-top: 3%; border-radius: 15px; padding: 15px; background-color: #0f9311; color: white; position: relative; overflow: hidden; box-shadow: 0 0 15px rgba(0, 0, 0, 0.3); transition: transform 0.3s; animation: scaleUp 1.5s infinite;">
    <h4 class="font-weight-bold">
        <i class="fas fa-check-circle" style="display: inline-block; animation: bounceIcon 1.5s infinite;"></i>
        <span style="display: inline-block; animation: flashText 2s infinite;">
            {{ session()->get('Updated_Sub-Category_Successfully') }}
        </span>
    </h4>
</div>
@elseif(session()->has('Restored'))
<div class="alert alert-success text-center mx-auto shadow-lg" style="max-width: 550%; margin-top: 3%; border-radius: 15px; padding: 15px; background-color: #0f9311; color: white; position: relative; overflow: hidden; box-shadow: 0 0 15px rgba(0, 0, 0, 0.3); transition: transform 0.3s; animation: scaleUp 1.5s infinite;">
    <h4 class="font-weight-bold">
        <i class="fas fa-check-circle" style="display: inline-block; animation: bounceIcon 1.5s infinite;"></i>
        <span style="display: inline-block; animation: flashText 2s infinite;">
            {{ session()->get('Restored') }}
        </span>
    </h4>
</div>
@elseif(session()->has('ForceDeleted'))
<div class="alert alert-success text-center mx-auto shadow-lg" style="max-width: 550%; margin-top: 3%; border-radius: 15px; padding: 15px; background-color: #c5150cb3; color: white; position: relative; overflow: hidden; box-shadow: 0 0 15px rgba(0, 0, 0, 0.3); transition: transform 0.3s; animation: scaleUp 1.5s infinite;">
    <h4 class="font-weight-bold">
        <i class="fas fa-exclamation-circle" style="display: inline-block; animation: bounceIcon 1.5s infinite;"></i>
        <span style="display: inline-block; animation: flashText 2s infinite;">
            {{ session()->get('ForceDeleted') }}
        </span>
    </h4>
</div>
@endif

