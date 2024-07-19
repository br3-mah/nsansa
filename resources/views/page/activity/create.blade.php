@extends('layouts.app')
@section('content')
<div class="content">
    <div class="intro-y flex items-center mt-8">
        <div class="text-lg font-medium flex mr-auto">
            <i data-lucide="person-standing" class="w-6 h-6"></i>
            &nbsp;
            <span class="block">
                <p>Activities</p>
                <p class="text-sm text-primary font-medium mr-auto">
                    Create & assign a new activity
                </p>
            </span>
        </div>
        <a href="{{ route('appointment') }}" class="intro-x flex space-x-2 btn shadow-md mr-2">
            <i data-lucide="undo" class="w-4 h-4"></i>
            <span>Back</span>
        </a>
    </div>
    @if (count($errors) > 0)
        <div class="w-full">
            <div class="intro-x alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="grid grid-cols-11 gap-x-6 mt-5 pb-20">
        <form style="max-width: 100%" class="col-span-12" method="POST" action="{{ route('activities.store') }}">
            @csrf
            <div class="intro-y col-span-11 2xl:col-span-9">
                <!-- BEGIN: Product Information -->
                <div class="intro-y box p-5 mt-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> 
                            <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Therapy Activity Information 
                        </div>

                        <div class="mt-5">
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Activity Description</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                        <div class="leading-relaxed text-slate-500 text-xs mt-3"> 
                                            For example, Eat dinner with family. </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <input id="product-name" name="desc" type="text" class="form-control" placeholder="Description">
                                    <input id="user" name="user_id" type="hidden" class="form-control" value="{{ auth()->user()->id }}">
                                    <div class="form-help text-right">Maximum character 0/70</div>
                                </div>
                            </div>
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Category</div>
                                            <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <select id="category" name="type" class="form-select">
                                        <option value="None">None</option>
                                        <option value="anxiety">Anxiety</option>
                                        <option value="fobia">Fobia</option>
                                        <option value="substance use disorder">Substance Use Disorder</option>
                                        <option value="attention deficit hyperactivity disorder">Attention Deficit Hyperactivity Disorder</option>
                                        <option value="obsessive compulsive disorder (OCD)">Obsessive Compulsive Disorder (OCD)</option>
                                        <option value="oppositional and defiant behavior">Oppositional and Defiant Behavior</option>
                                        <option value="stress management">Stress Management</option>
                                        <option value="paranoid personality (PPD)">Paranoid personality (PPD)</option>
                                        <option value="paranoia">Paranoia</option>
                                        <option value="Grief, Loss, and Bereavement">Grief, Loss, and Bereavement</option>
                                        <option value="depression">Depression</option>
                                        <option value="Pregnancy and Childbirthing">Pregnancy and Childbirthing</option>
                                        <option value="Agoraphobia">Agoraphobia (crowded place, confined spaces)</option>
                                        <option value="antisocial personality disorder (ASPD)">antisocial personality disorder (ASPD)</option>
                                        <option value="Academic concerns">Academic concerns (learning difficulties, bulling)</option>
                                        <option value="obsessive compulsive disorder">Obsessive Compulsive Disorder</option>
                                        <option value="post-Traumatic stress disorder">Post-Traumatic Stress Disorder</option>
                                        <option value="career confusion">Career Confusion</option>
                                        <option value="Sex Addiction Therapy">Sex Addiction</option>
                                        <option value="anger management">Anger Management</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                <div class="form-label xl:w-64 xl:!mr-10">
                                    <div class="text-left">
                                        <div class="flex items-center">
                                            <div class="font-medium">Assign Patient(s)</div>
                                        </div>
                                        <div class="leading-relaxed text-slate-500 text-xs mt-3"> You can add a new subcategory or choose from the existing subcategory list. </div>
                                    </div>
                                </div>
                                <div class="w-full mt-3 xl:mt-0 flex-1">
                                    <select name="patient_ids[]" id="subcategory" data-placeholder="Etalase" class="tom-select w-full" multiple>
                                        @forelse ($users as $u)
                                            <option value="{{ $u->id }}">{{ $u->fname.' '.$u->lname }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- END: Weight & Shipping -->
                <div class="flex justify-end flex-col md:flex-row gap-2 mt-5">
                    {{-- <button type="button" class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-full md:w-52">Cancel</button>
                    <button type="button" class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-full md:w-52">Save & Add New Product</button> --}}
                    <button type="submit" class="btn py-3 btn-primary w-full md:w-52">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
