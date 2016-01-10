<div class="row clearfix propDetailsrow">
    <div class="col s4 propImage">
        <img alt="Bootstrap Image Preview" src="@if($firstItem) {{$firstItem->image}} @endif" />
    </div>
    <div class="col s8 propItemDetail">
        <ul class="collection with-header">
            <li class="collection-header itemName">
                <span class="title">@if($firstItem) {{$firstItem->name}} @endif</span>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle">assistant</i>
                <span class="title">by @if($firstItem) {{$firstItem->builder}} @endif</span>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle green">home</i>
                <span class="title">Type: @if($firstItem) {{$firstItem->type}} @endif</span>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle red">attach_money</i>
                <span class="title">Price: @if($firstItem) {{$firstItem->price}} @endif</span>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle green">lens</i>
                <span class="title">Color: @if($firstItem) {{$firstItem->color}} @endif</span>
            </li>
        </ul>
    </div>
    </div>
    <div class="row clearfix propDetailsrow">
    <div class="col s3 propAmenities">

        <ul class="collection with-header">
            <li class="collection-header itemName">
                <span class="title">Amenities</span>
            </li>
            @if($firstItem->amenities)
                <?php $amenities = json_decode($firstItem->amenities); ?>
            @if($amenities->pool)
            <li class="collection-item ">
                <span class="title">Pool</span>
            </li>
            @endif
            @if($amenities->gym)
            <li class="collection-item ">
                <span class="title">Gym</span>
            </li>
            @endif
            @if($amenities->play_area)
            <li class="collection-item ">
                <span class="title">Play Area</span>
            </li>
            @endif
            @if($amenities->community_hall)
            <li class="collection-item ">
                <span class="title">Community Hall</span>
            </li>
            @endif
            @if($amenities->power_backup)
            <li class="collection-item ">
                <span class="title">Power Backup</span>
            </li>
            @endif
            @if($amenities->lift)
                <li class="collection-item ">
                    <span class="title">Lift</span>
                </li>
            @endif
                @else
                <li class="collection-item ">
                    <span class="title">No Data Available</span>
                </li>
            @endif
        </ul>

    </div>
    <div class="col s9 propLocation" id="PropMap">

    </div>
    </div>