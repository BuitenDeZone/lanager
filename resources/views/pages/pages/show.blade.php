@extends('layouts.default')

@section('title')
    {{ $page->title }}
@endsection

@section('content')
    <h1>{{ $page->title }}</h1>
    @include('components.alerts.all')

    @if(!$page->published)
        @include('components.alerts.alert-single', ['type' => 'warning', 'message' => __('phrase.page-not-published')])
    @endif

    @if($page->lan_id != $currentLan->id)
        @include('components.alerts.alert-single', ['type' => 'warning', 'message' => __('phrase.viewing-page-from-past-lan')])
    @endif

    {!! Markdown::convertToHtml($page->content) !!}

    @can('update', $page)
        <a href="{{ route( 'lans.pages.edit', ['lan' => $lan, 'page' => $page]) }}" class="btn btn-primary">@lang('title.edit')</a>
    @endcan
    @can('delete', $page)
        <form action="{{ route( 'lans.pages.destroy', ['lan' => $lan, 'page' => $page]) }}" method="POST" class="inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger">@lang('title.delete')</button>
        </form>
    @endcan

@endsection