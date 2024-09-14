@props(['id' => '', 'offerColumns' => [], 'offers' => []])

<div id="{{ $id }}" class="card-offers u-margin-bottom-huge">
    <div class="card-offers__title">{{__('OFFER')}}</div>

    <div class="card-offers__subtitle">{{__('Our offer is the most competitive on market!')}}</div>
    <div class="card-offers__subtitle">{{__('And tier of our products is the highest!')}}</div>
    

    <table class="card-offers__table u-margin-top-medium table">
        <thead>
            <tr>
                @foreach ($offerColumns as $index => $column)
                    <th scope="col">
                        <span >{{ ucfirst($index !=1 ? $column : "") }}</span>
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($offers as $index => $offer)
                <tr>
                    <th scope="row">
                        {{ $offer->description }}
                    </th>
                    <td>
                        {{ $offer->time }}
                    </td>
                    <td>
                        {{ $offer->cost }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>