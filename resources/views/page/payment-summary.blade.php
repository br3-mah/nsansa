@switch($gateway)
  @case('pbs')
    @include('page.common.pbs-gateway')
    @break
  @case('sparco')
    @include('page.common.sparco-gateway')
    @break

  @default
    
@endswitch