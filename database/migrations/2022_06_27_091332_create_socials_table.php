<?php

use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->date('collection_date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'student_id')->nullable()->constrained('users')->cascadeOnDelete();

            $table->json('pragmatic_objective')->nullable();
            $table->json('personal')->nullable();
            $table->json('topic_maintenance')->nullable();
            $table->json('conversational_structure')->nullable();
            $table->json('word_structure')->nullable();
            $table->json('manner_effectiveness')->nullable();
            $table->json('repair_structures')->nullable();
            $table->json('responsiveness')->nullable();
            $table->json('instrumental_states_needs')->nullable();
            $table->json('requesting')->nullable();
            $table->json('prosody')->nullable();
            $table->json('protests')->nullable();
            $table->json('style_of_conversation')->nullable();
            $table->json('humor')->nullable();
            $table->json('greetings_acknowledgements')->nullable();
            $table->json('problem_solving')->nullable();
            $table->json('deceit')->nullable();
            $table->json('academy_communication')->nullable();
            $table->json('nonverbal_communication')->nullable();
            $table->json('perspective_taking')->nullable();
            $table->json('regulatory_gives_commands')->nullable();
            $table->json('social_emotional')->nullable();
            $table->timestamps();

            $table->text('interaction_with_adults_1')->nullable();
            $table->text('age_appropriate_peers_1')->nullable();
            $table->text('interaction_with_younger_children_1')->nullable();
            $table->text('waiting_for_a_response_from_peers_1')->nullable();
            $table->text('waiting_for_a_response_from_peers_2')->nullable();
            $table->text('waiting_for_a_response_from_peers_3')->nullable();
            $table->text('negotiating_deals_1')->nullable();
            $table->text('taking_turns_1')->nullable();
            $table->text('many_individuals_simultaneously_1')->nullable();
            $table->text('many_individuals_simultaneously_2')->nullable();
            $table->text('ability_to_establish_multiple_friendships_1')->nullable();
            $table->text('knowing_when_to_persist_or_let_go_of_an_idea_1')->nullable();
            $table->text('interpreting_facial_expressions_and_voices_1')->nullable();
            $table->text('understanding_the_rules_of_the_game_1')->nullable();
            $table->text('Expressing_various_appropriate_expressions_1')->nullable();
            $table->text('Receiving_and_giving_gifts_1')->nullable();
            $table->text('understanding_sharing_1')->nullable();
            $table->text('participation_in_group_activities_1')->nullable();
            $table->text('passive_tendencies_1')->nullable();
            $table->text('aggressive_tendencies_1')->nullable();
            $table->text('responsiveness_1')->nullable();
            $table->text('responsiveness_2')->nullable();
            $table->text('ability_to_handle_being_left_out_1')->nullable();
            $table->text('expresses_feelings_1')->nullable();
            $table->text('identifies_feelings_1')->nullable();
            $table->text('explains_feelings_1')->nullable();
            $table->text('provides_excuses_or_reasons_1')->nullable();

            $table->text('offers_an_opinion_with_support_1')->nullable();
            $table->text('offers_an_opinion_with_support_2')->nullable();
            $table->text('offers_an_opinion_with_support_3')->nullable();

            $table->text('complains_1')->nullable();
            $table->text('blames_others_1')->nullable();
            $table->text('provides_pertinent_information_on_request_1')->nullable();
            $table->text('provides_pertinent_information_on_request_2')->nullable();

            $table->text('ability_to_maintain_topic_relevancy_1')->nullable();
            $table->text('ability_to_maintain_topic_relevancy_2')->nullable();

            $table->text('ability_to_change_a_topic_using_signals_1')->nullable();
            $table->text('ability_to_change_a_topic_using_signals_2')->nullable();

            $table->text('ability_to_change_a_topic_using_verbal_means_1')->nullable();
            $table->text('relevancy_of_information_1')->nullable();
            $table->text('ability_to_interrupt_appropriately_1')->nullable();
            $table->text('ability_to_interrupt_appropriately_2')->nullable();
            $table->text('ability_to_terminate_the_conversation_1')->nullable();
            $table->text('ability_to_initiate_a_conversation_1')->nullable();
            $table->text('ability_to_initiate_a_conversation_2')->nullable();
            $table->text('the_interest_area_1')->nullable();
            $table->text('the_interest_area_2')->nullable();

            $table->text('ability_to_acknowledge_others_in_conversation_1')->nullable();

            $table->text('ability_to_delete_1')->nullable();
            $table->text('ability_to_delete_2')->nullable();

            $table->text('ability_to_order_information_appropriately_1')->nullable();
            $table->text('ability_to_order_information_appropriately_2')->nullable();

            $table->text('use_of_pedantic_speech_1')->nullable();
            $table->text('ability_to_use_generals_or_specifics_1')->nullable();

            $table->text('pronoun_use_1')->nullable();
            $table->text('use_of_word_referents_1')->nullable();
            $table->text('ability_to_employee_1')->nullable();
            $table->text('lie_ambiguous_confusing_information_share_1')->nullable();
            $table->text('provides_relevant_information_1')->nullable();
            $table->text('provides_relevant_information_2')->nullable();

            $table->text('truthfulness_of_information_1')->nullable();
            $table->text('ability_to_establish_joint_activity_1')->nullable();
            $table->text('ability_to_establish_joint_activity_2')->nullable();

            $table->text('tendency_to_present_personal_opinions_as_factual_1')->nullable();
            $table->text('requests_clarification_as_needed_1')->nullable();
            $table->text('spontaneously_provides_additional_information_1')->nullable();

            $table->text('clarification_purposes_1')->nullable();
            $table->text('clarification_purposes_2')->nullable();

            $table->text('looks_at_speaker_when_called_1')->nullable();
            $table->text('looks_at_speaker_when_called_2')->nullable();

            $table->text('delay_of_response_1')->nullable();

            $table->text('ability_to_label_information_appropriately_1')->nullable();
            $table->text('ability_to_label_information_appropriately_2')->nullable();

            $table->text('ability_to_describe_objects_appropriately_1')->nullable();
            $table->text('ability_to_describe_objects_appropriately_2')->nullable();
            $table->text('ability_to_describe_objects_appropriately_3')->nullable();
            $table->text('ability_to_describe_objects_appropriately_4')->nullable();

            $table->text('ability_to_describe_events_appropriately_1')->nullable();
            $table->text('ability_to_describe_events_appropriately_2')->nullable();
            $table->text('ability_to_describe_events_appropriately_3')->nullable();
            $table->text('ability_to_describe_events_appropriately_4')->nullable();

            $table->text('ability_to_state_facts_appropriately_1')->nullable();
            $table->text('ability_to_state_facts_appropriately_2')->nullable();
            $table->text('ability_to_state_facts_appropriately_3')->nullable();
            $table->text('ability_to_state_facts_appropriately_4')->nullable();

            $table->text('ability_to_provide_clarification_appropriately_1')->nullable();
            $table->text('ability_to_provide_clarification_appropriately_2')->nullable();
            $table->text('ability_to_provide_clarification_appropriately_3')->nullable();
            $table->text('ability_to_provide_clarification_appropriately_4')->nullable();

            $table->text('makes_polite_requests_1')->nullable();
            $table->text('makes_polite_requests_2')->nullable();
            $table->text('makes_polite_requests_3')->nullable();

            $table->text('makes_choices_1')->nullable();
            $table->text('makes_choices_2')->nullable();
            $table->text('makes_choices_3')->nullable();
            $table->text('makes_choices_4')->nullable();

            $table->text('gives_description_of_an_object_wanted_1')->nullable();
            $table->text('gives_description_of_an_object_wanted_2')->nullable();
            $table->text('gives_description_of_an_object_wanted_3')->nullable();

            $table->text('expresses_a_specific_personal_need_1')->nullable();
            $table->text('expresses_a_specific_personal_need_2')->nullable();
            $table->text('requests_help_1')->nullable();

            $table->text('ability_to_request_information_appropriately_1')->nullable();
            $table->text('ability_to_request_information_appropriately_2')->nullable();
            $table->text('ability_to_request_information_appropriately_3')->nullable();

            $table->text('ability_to_request_permission_appropriately_1')->nullable();
            $table->text('ability_to_request_permission_appropriately_2')->nullable();

            $table->text('ability_to_request_yes_no_responses_appropriately_1')->nullable();
            $table->text('ability_to_request_yes_no_responses_appropriately_2')->nullable();
            $table->text('ability_to_request_yes_no_responses_appropriately_3')->nullable();

            $table->text('ability_to_use_wh_questions_appropriately_1')->nullable();

            $table->text('ability_to_request_an_action_of_another_appropriately_1')->nullable();
            $table->text('ability_to_request_an_action_of_another_appropriately_2')->nullable();

            $table->text('ability_to_request_clarification_appropriately_1')->nullable();
            $table->text('ability_to_request_clarification_appropriately_2')->nullable();

            $table->text('ability_to_request_attention_appropriately_1')->nullable();
            $table->text('ability_to_request_attention_appropriately_2')->nullable();

            $table->text('ability_to_request_help_appropriately_1')->nullable();
            $table->text('ability_to_request_help_appropriately_2')->nullable();

            $table->text('ability_to_use_appropriate_rate_of_speech_1')->nullable();
            $table->text('ability_to_use_appropriate_rate_of_speech_2')->nullable();
            $table->text('ability_to_use_appropriate_rate_of_speech_3')->nullable();

            $table->text('ability_to_use_appropriate_tone_of_voice_1')->nullable();
            $table->text('ability_to_use_appropriate_tone_of_voice_2')->nullable();
            $table->text('ability_to_use_appropriate_tone_of_voice_3')->nullable();

            $table->text('ability_to_use_appropriate_pitch_1')->nullable();

            $table->text('ability_to_use_appropriate_loudness_1')->nullable();
            $table->text('ability_to_use_appropriate_loudness_2')->nullable();

            $table->text('implied_meanings_via_tone_of_voice_1')->nullable();
            $table->text('implied_meanings_via_tone_of_voice_2')->nullable();
            $table->text('implied_meanings_via_tone_of_voice_3')->nullable();
            $table->text('implied_meanings_via_tone_of_voice_4')->nullable();

            $table->text('inflectional_cues_1')->nullable();
            $table->text('inflectional_cues_2')->nullable();
            $table->text('inflectional_cues_3')->nullable();
            $table->text('inflectional_cues_4')->nullable();

            $table->text('ability_to_state_his_opinion_using_appropriate_means_1')->nullable();
            $table->text('ability_to_state_his_opinion_using_appropriate_means_2')->nullable();
            $table->text('ability_to_state_his_opinion_using_appropriate_means_3')->nullable();
            $table->text('ability_to_state_his_opinion_using_appropriate_means_4')->nullable();

            $table->text('ability_to_disagree_1')->nullable();
            $table->text('ability_to_disagree_2')->nullable();

            $table->text('conversation_according_to_person_1')->nullable();
            $table->text('conversation_according_to_person_2')->nullable();
            $table->text('conversation_according_to_person_3')->nullable();

            $table->text('ability_to_shift_1')->nullable();
            $table->text('ability_to_shift_2')->nullable();
            $table->text('ability_to_shift_3')->nullable();

            $table->text('conversation_according_to_humor_1')->nullable();
            $table->text('conversation_according_to_humor_2')->nullable();
            $table->text('conversation_according_to_humor_3')->nullable();
            $table->text('conversation_according_to_humor_4')->nullable();

            $table->text('ability_to_engage_a_listener_appropriately_1')->nullable();
            $table->text('ability_to_engage_a_listener_appropriately_2')->nullable();
            $table->text('ability_to_engage_a_listener_appropriately_3')->nullable();
            $table->text('ability_to_engage_a_listener_appropriately_4')->nullable();

            $table->text('ability_to_use_politeness_1')->nullable();
            $table->text('ability_to_use_politeness_2')->nullable();
            $table->text('ability_to_use_politeness_3')->nullable();

            //$table->text('appropriateness_to_the_situation_1')->nullable();
            $table->text('appropriateness_to_the_situation_2')->nullable();
            $table->text('appropriateness_to_the_situation_3')->nullable();
            $table->text('appropriateness_to_the_situation_4')->nullable();

            $table->text('ability_to_recognize_others_moods_1')->nullable();
            $table->text('ability_to_recognize_others_moods_2')->nullable();
            $table->text('ability_to_recognize_others_moods_3')->nullable();
            $table->text('ability_to_recognize_others_moods_4')->nullable();

            $table->text('ability_to_differentiate_requests_from_demands_1')->nullable();
            $table->text('ability_to_differentiate_requests_from_demands_2')->nullable();
            $table->text('ability_to_differentiate_requests_from_demands_3')->nullable();

            $table->text('comprehends_humor_1')->nullable();
            $table->text('comprehends_humor_2')->nullable();
            $table->text('comprehends_humor_3')->nullable();

            $table->text('uses_humor_appropriately_1')->nullable();
            $table->text('uses_humor_appropriately_2')->nullable();
            $table->text('uses_humor_appropriately_3')->nullable();
            $table->text('uses_humor_appropriately_4')->nullable();
            $table->text('uses_humor_appropriately_5')->nullable();

            $table->text('provides_greetings_1')->nullable();
            $table->text('provides_greetings_2')->nullable();
            $table->text('provides_greetings_3')->nullable();
            $table->text('provides_greetings_4')->nullable();
            $table->text('provides_greetings_5')->nullable();

            $table->text('uses_greetings_1')->nullable();
            $table->text('uses_greetings_2')->nullable();
            $table->text('uses_greetings_3')->nullable();
            $table->text('uses_greetings_4')->nullable();
            $table->text('uses_greetings_5')->nullable();

            $table->text('another_individual_1')->nullable();

            $table->text('ability_to_solve_problems_affecting_himself_1')->nullable();
            $table->text('ability_to_solve_problems_affecting_himself_2')->nullable();
            $table->text('ability_to_solve_problems_affecting_himself_3')->nullable();

            $table->text('ability_to_solve_problems_affecting_others_1')->nullable();
            $table->text('ability_to_solve_problems_affecting_others_2')->nullable();
            $table->text('ability_to_solve_problems_affecting_others_3')->nullable();
            $table->text('ability_to_solve_problems_affecting_others_4')->nullable();

            $table->text('ability_to_recognize_problems_affecting_others_1')->nullable();

            $table->text('ability_to_recognize_problems_affecting_himself_1')->nullable();
            $table->text('ability_to_recognize_problems_affecting_himself_2')->nullable();
            $table->text('ability_to_recognize_problems_affecting_himself_3')->nullable();

            $table->text('ability_to_establish_cause_effect_1')->nullable();
            $table->text('ability_to_establish_cause_effect_2')->nullable();
            $table->text('ability_to_establish_cause_effect_3')->nullable();

            $table->text('ability_to_use_conflict_resolution_1')->nullable();
            $table->text('ability_to_use_conflict_resolution_2')->nullable();
            $table->text('ability_to_use_conflict_resolution_3')->nullable();

            $table->text('uses_language_to_deceive_1')->nullable();
            $table->text('uses_language_to_deceive_2')->nullable();
            $table->text('uses_language_to_deceive_3')->nullable();
            $table->text('uses_language_to_deceive_4')->nullable();

            $table->text('lies_1')->nullable();
            $table->text('lies_2')->nullable();
            $table->text('lies_3')->nullable();
            $table->text('lies_4')->nullable();

            $table->text('to_teacher_requests_1')->nullable();
            $table->text('to_teacher_requests_2')->nullable();
            $table->text('to_teacher_requests_3')->nullable();

            $table->text('agenda_appropriately_1')->nullable();

            $table->text('teachers_attention_appropriately_1')->nullable();
            $table->text('teachers_attention_appropriately_2')->nullable();

            $table->text('ability_to_request_clarification_from_teacher_1')->nullable();
            $table->text('ability_to_request_clarification_from_teacher_2')->nullable();

            $table->text('ability_to_participate_in_classroom_discussions_1')->nullable();
            $table->text('ability_to_participate_in_classroom_discussions_2')->nullable();

            $table->text('ability_to_interact_with_classroom_peers_1')->nullable();
            $table->text('ability_to_interact_with_classroom_peers_2')->nullable();

            $table->text('ability_to_paraphrase_text_1')->nullable();

            $table->text('ability_to_summarize_a_story_providing_key_information_1')->nullable();
            $table->text('ability_to_summarize_a_story_providing_key_information_2')->nullable();

            $table->text('requiring_inferential_reasoning_1')->nullable();
            $table->text('requiring_inferential_reasoning_2')->nullable();
            $table->text('requiring_inferential_reasoning_3')->nullable();

            $table->text('ability_to_recognize_personal_space_boundaries_1')->nullable();
            $table->text('ability_to_recognize_personal_space_boundaries_2')->nullable();

            $table->text('ability_to_touch_appropriately_1')->nullable();
            $table->text('ability_to_touch_appropriately_2')->nullable();

            $table->text('comprehends_facial_expression_1')->nullable();
            $table->text('comprehends_facial_expression_2')->nullable();
            $table->text('comprehends_facial_expression_3')->nullable();

            $table->text('comprehends_eye_gaze_1')->nullable();
            $table->text('comprehends_eye_gaze_2')->nullable();

            $table->text('comprehends_gestures_1')->nullable();

            $table->text('comprehends_body_language_1')->nullable();

            $table->text('ability_to_use_facial_expression_1')->nullable();

            $table->text('ability_to_use_eye_gaze_1')->nullable();
            $table->text('ability_to_use_eye_gaze_2')->nullable();

            $table->text('ability_to_use_gestures_1')->nullable();

            $table->text('ability_to_use_body_language_1')->nullable();

            $table->text('ability_to_use_eye_contact_1')->nullable();
            $table->text('ability_to_use_eye_contact_2')->nullable();

            $table->text('ability_to_recognize_anothers_viewpoints_1')->nullable();

            $table->text('ability_to_recognize_anothers_interests_1')->nullable();

            $table->text('ability_to_recognize_anothers_feelings_1')->nullable();

            $table->text('concern_for_anothers_problems_1')->nullable();

            $table->text('gives_directions_to_play_a_game_1')->nullable();
            $table->text('gives_directions_to_play_a_game_2')->nullable();
            $table->text('gives_directions_to_play_a_game_3')->nullable();

       
            $table->text('gives_directions_to_make_something_1')->nullable();
            $table->text('gives_directions_to_make_something_2')->nullable();
            $table->text('gives_directions_to_make_something_3')->nullable();

            $table->text('changes_the_style_1')->nullable();
            $table->text('changes_the_style_2')->nullable();
            $table->text('changes_the_style_3')->nullable();

            $table->text('ability_to_recognize_personal_emotional_states_1')->nullable();

            $table->text('ability_to_recognize_emotional_states_in_others_1')->nullable();

            $table->text('ability_to_express_personal_emotional_state_1')->nullable();

            $table->text('ability_to_use_appropriate_self_control_1')->nullable();
            $table->text('ability_to_use_appropriate_self_control_2')->nullable();

            $table->text('ability_to_lose_a_game_graciously_1')->nullable();

            $table->text('perfectionist_quality_1')->nullable();

            $table->text('degree_of_anxiety_in_social_settings_1')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socials');
    }
};
