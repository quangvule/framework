<!-- Collection field -->
<div class="themosis-collection-wrapper">
    <div class="themosis-collection-inputs">
        {{ Themosis\Facades\Form::hidden($field['name'].'[]', '', array('id' => $field['id'], 'data-field' => 'collection', 'data-limit' => 10)) }}
    </div>
    <script id="themosis-collection-item-template" type="text/template">
        <li>
            <input type="hidden" name="{{ $field['name'] }}[]" value="<%= value %>"/>
            <div class="themosis-collection__item">
                <img src="<%= src %>" alt="Collection Item"/>
                <a class="check" title="Remove" href="#">
                    <div class="media-modal-icon"></div>
                </a>
            </div>
        </li>
    </script>
    <div class="themosis-collection-container">
        <!-- Collection -->
        <div class="themosis-collection">
            <ul class="themosis-collection-list">
                <li>
                    {{ Themosis\Facades\Form::hidden($field['name'].'[]', 24) }}
                    <div class="themosis-collection__item">
                        <img src="{{ themosis_plugin_url(themosis_path('plugin')) }}/src/Themosis/_assets/images/themosisFileIcon.png" alt="Collection Item"/>
                        <a class="check" title="Remove" href="#">
                            <div class="media-modal-icon"></div>
                        </a>
                    </div>
                </li>
                <li>
                    {{ Themosis\Facades\Form::hidden($field['name'].'[]', 26) }}
                    <div class="themosis-collection__item">
                        <img src="{{ themosis_plugin_url(themosis_path('plugin')) }}/src/Themosis/_assets/images/themosisFileIcon.png" alt="Collection Item"/>
                        <a class="check" title="Remove" href="#">
                            <div class="media-modal-icon"></div>
                        </a>
                    </div>
                </li>
                <li>
                    {{ Themosis\Facades\Form::hidden($field['name'].'[]', 28) }}
                    <div class="themosis-collection__item">
                        <img src="{{ themosis_plugin_url(themosis_path('plugin')) }}/src/Themosis/_assets/images/themosisFileIcon.png" alt="Collection Item"/>
                        <a class="check" title="Remove" href="#">
                            <div class="media-modal-icon"></div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- End collection -->
    </div>
    <div class="themosis-collection-buttons">
        <button id="themosis-collection-add" type="button" class="button button-primary"><?php _e('Add'); ?></button>
        <button id="themosis-collection-remove" type="button" class="button button-primary themosis-button-remove"><?php _e('Remove'); ?></button>
    </div>
    @if(isset($field['info']))
        <div class="themosis-field-info">
            <p>{{ $field['info'] }}</p>
        </div>
    @endif
</div>
<!-- End collection field -->