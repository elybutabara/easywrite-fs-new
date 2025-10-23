@extends('frontend.learner.self-publishing.layout')

@section('title')
    <title>Project &rsaquo; Easywrite</title>
@stop

@section('content')
    <div class="learner-container">
        <div class="container">
            <a href="{{ route('learner.progress-plan') }}" class="btn btn-secondary mb-3">
                <i class="fa fa-arrow-left"></i> Back
            </a>
            <div class="card">
                <div class="card-header">
                    {{ trans('site.learner.copy-editing') }}

                    <button class="btn btn-primary btn-xs pull-right uploadOtherServiceManuscriptBtn" data-toggle="modal"
                            data-target="#uploadOtherServiceManuscriptModal"
                            data-action="{{ route('learner.project.progress-plan.other-service.upload-manuscript', 1) }}">
                        {{ trans('site.front.form.upload-manuscript') }}
                    </button>
                </div>
                <div class="card-body py-0">
                    <table class="table table-global">
                        <thead>
                        <tr>
                            <th>
                                {{ trans('site.learner.script') }}
                            </th>
                            <th>
                                {{ trans('site.learner.date-ordered') }}
                            </th>
                            <th>
                                {{ trans('site.learner.status') }}
                            </th>
                            <th>
                                {{ trans('site.learner.expected-finish') }}
                            </th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($copyEditings as $editing)
                                <?php $extension = explode('.', basename($editing->file)); ?>
                                <tr>
                                    <td>
                                        @if (strpos($editing->file, 'Easywrite_app'))
                                            <a href="/dropbox/shared-link/{{ $editing->file }}" target="_blank">
                                                {{ basename($editing->file) }}
                                            </a>
                                        @else
                                            @if( end($extension) == 'pdf' || end($extension) == 'odt' )
                                                <a href="/js/ViewerJS/#../../{{ $editing->file }}">{{ basename($editing->file) }}</a>
                                            @elseif( end($extension) == 'docx' )
                                                <a href="https://view.officeapps.live.com/op/embed.aspx?src={{url('')}}/{{$editing->file}}">{{ basename($editing->file) }}</a>
                                            @endif
                                        @endif

                                        @if(!$editing->is_locked && $editing->status !=2)
                                                <br>
                                            <button class="btn btn-primary btn-xs uploadOtherServiceManuscriptBtn" data-toggle="modal"
                                                    data-target="#uploadOtherServiceManuscriptModal"
                                                    data-id="{{ $editing->id }}"
                                                    data-action="{{ route('learner.project.progress-plan.other-service.upload-manuscript', 1) }}">
                                                {{ trans('site.front.form.upload-manuscript') }}
                                            </button>
                                        @endif
                                    </td>
                                    <td>
                                        {{ \App\Http\FrontendHelpers::formatDate($editing->created_at) }}
                                    </td>
                                    <td>
                                        @if( $editing->status == 2 )
                                            <span class="label label-success">{{ trans('site.learner.finished') }}</span>
                                        @elseif( $editing->status == 1 )
                                            <span class="label label-primary">{{ trans('site.learner.started') }}</span>
                                        @elseif( $editing->status == 0 )
                                            <span class="label label-warning">{{ trans('site.learner.not-started') }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($editing->expected_finish)
                                            {{ \App\Http\FrontendHelpers::formatToYMDtoPrettyDate($editing->expected_finish) }}
                                            <br>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($editing->file)
                                            @if (strpos($editing->file, 'Easywrite_app'))
                                                <a href="{{ url('dropbox/download/' . trim($editing->file)) }}">
                                                    {{ trans('site.learner.download-original-script') }}
                                                </a>
                                            @else
                                                <a href="{{ route('learner.other-service.download-doc',
                                                ['id' => $editing->id, 'type' => 1]) }}">
                                                    {{ trans('site.learner.download-original-script') }}
                                                </a>
                                            @endif
                                        @endif

                                        @if ($editing->feedback)
                                            <br>
                                            <a href="{{ route('learner.other-service.download-feedback', $editing->feedback->id) }}"
                                               style="color:#eea236">
                                                {{ trans('site.learner.download-feedback') }}
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="uploadOtherServiceManuscriptModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        {{ trans('site.front.form.upload-manuscript') }}
                    </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="" onsubmit="disableSubmit(this)" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="project_id" value="{{ $standardProject->id }}">
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        <input type="hidden" name="id">
                        <div class="form-group">
                            <label>{{ trans_choice('site.manuscripts', 1) }}</label>
                            <input type="file" name="manuscript" class="form-control"
                                   accept="application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/pdf,
					    application/vnd.oasis.opendocument.text" multiple required>
                        </div>

                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">{{ trans('site.save') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(".uploadOtherServiceManuscriptBtn").click(function() {
            let action = $(this).data('action');
            let modal = $('#uploadOtherServiceManuscriptModal');
            let record_id = $(this).data('id');
            modal.find('form').attr('action', action);
            modal.find('[name=id]').val(record_id);
        });
    </script>
@stop