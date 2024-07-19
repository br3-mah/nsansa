@extends('layouts.app-settings')
@section('content')
<div class="content">
    <h2 class="text-lg font-medium mr-auto flex space-x-6 mt-8">
        <i data-lucide="piggy-bank" class="w-6 h-6"></i>
        <i data-lucide="settings" class="w-3 h-3"></i>
        &nbsp;
        @hasrole('admin')
        <span>Commission Settings</span>
        @endhasrole

        @hasrole('counselor')
        <span>Commissions</span>
        @endhasrole
    </h2>
    <div class="px-4">
        @if (Session::has('attention'))
        <div class="intro-x alert alert-secondary w-1/2 alert-dismissible justify-center show flex items-center mb-2" role="alert"> 
            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> 
            {{ Session::get('attention') }}
            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close"> 
                <i data-lucide="x" class="w-4 h-4"></i> 
            </button> 
        </div>
        @elseif (Session::has('error_msg'))
        <div class="intro-x alert alert-danger w-1/2 alert-dismissible justify-center show flex items-center mb-2" role="alert"> 
            <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i> 
            {{ Session::get('error_msg') }}
            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close"> 
                <i data-lucide="x" class="w-4 h-4"></i> 
            </button> 
        </div>
        @endif
    </div>

    <form action="{{ route('set-commission') }}" method="POST" class="w-full mt-4">
        @csrf
        <div class="flex p-4">
            <div class="w-1/2">
                <h1 class="text-lg ">Set Global Commissions</h1>
                <small>Set the commission value obtained from all user groups</small>
            </div>
            <div class="flex w-1/2 items-center justify-center">
                <div class="mb-3">
                    <label for="value" class="form-label">Commission</label>
                    <input value="{{ $com_sets->value ?? '0.00' }}" 
                        type="text" 
                        class="form-control" 
                        name="value" 
                        placeholder="0.00" required>
                    @if ($errors->has('value'))
                        <span class="text-danger text-left">{{ $errors->first('value') }}</span>
                    @endif
                </div>
                <div class="mb-3 w-1/2">
                    <label for="type" class="form-label">Type</label>
                    <select name="type" id="commission-type" data-search="true" class="tom-select form-control multiple">
                        <option class="captialize" value="{{ $com_sets->type ?? '' }}">{{ $com_sets->type ?? '-- choose --' }}</option>
                        <option value="percent">Percentage</option>
                        <option value="fixed">Fixed</option>
                    </select>
                    @if ($errors->has('type'))
                        <span class="text-danger text-left">{{ $errors->first('type') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="currency" class="form-label">Currency</label>
                    <select name="currency" id="currency" data-search="true" class="tom-select form-control multiple">
                        <option class="capitalize" value="{{ $com_sets->currency ?? 'zmw' }}">{{ $com_sets->currency ?? 'ZMW' }}</option>
                        <option value="zmw">ZMW</option>
                        <option value="usd">USD</option>
                    </select>
                    @if ($errors->has('currency'))
                        <span class="text-danger text-left">{{ $errors->first('currency') }}</span>
                    @endif
                </div>
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="desc" value="global-commission">
                <input type="hidden" name="status" value="1">
            </div>
        </div>
        <div class="w-full items-end fl-right justify-end">
            <button type="submit" class="btn btn-primary fl-right">Save</button>
        </div>
    </form>

</div>
@endsection