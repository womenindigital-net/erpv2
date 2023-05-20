<?php

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('functional_communications', function (Blueprint $table) {
            $table->id();
            $table->string('collection_date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'student_id')->nullable()->constrained('students')->cascadeOnDelete();
            $table->json('speech')->nullable();
            $table->json('body_language')->nullable();
            $table->json('words_usages_vocabulary')->nullable();
            $table->json('sentence_structure')->nullable();
            $table->json('relaying_information')->nullable();
            $table->json('following_directions')->nullable();
            $table->json('attention_and_memory')->nullable();
            $table->json('conversation_social_communication')->nullable();
            $table->json('play_skill')->nullable();

            $table->timestamps();

            $table->text("talk_too_loud_for_the_context")->nullable();
            $table->text("talk_too_loud_for_the_context_secondary")->nullable();
            $table->text("talk_too_quietly_for_the_context")->nullable();
            $table->text("talk_too_quietly_for_the_context_secondary")->nullable();
            $table->text("speech_is_hard_to_understand")->nullable();
            $table->text("speech_is_hard_to_understand_secondary")->nullable();

            $table->text("speech_calls_attention_of_itself")->nullable();
            $table->text("speech_calls_attention_of_itself_1")->nullable();
            
            $table->text("speech_calls_attention_of_itself_secondary")->nullable();
            $table->text("voice_is_too_hard")->nullable();
            $table->text("voice_is_too_hard_secondary")->nullable();
            $table->text("voice_is_too_low")->nullable();
            $table->text("voice_is_too_low_secondary")->nullable();
            $table->text("repeats_words_of_parts_of_word_when_talking")->nullable();
            $table->text("repeats_words_of_parts_of_word_when_talking_secondary")->nullable();
            $table->text("talks_fast_causing_speech_to_be_unclear")->nullable();
            $table->text("talks_fast_causing_speech_to_be_unclear_secondary")->nullable();
            $table->text("speech_sounds_monotone")->nullable();
            $table->text("speech_sounds_monotone_secondary")->nullable();

            $table->text("speech_sounds_sign_song")->nullable();
            $table->text("speech_sounds_sign_song_1")->nullable();

            $table->text("speech_sounds_sign_song_secondary")->nullable();
            $table->text("body_posture_is_too_rigid")->nullable();
            $table->text("body_posture_is_too_rigid_secondary")->nullable();
            $table->text("body_posture_is_too_relaxed")->nullable();
            $table->text("body_posture_is_too_relaxed_secondary")->nullable();
            $table->text("has_noticed_nervous_mannerisms")->nullable();
            $table->text("has_noticed_nervous_mannerisms_secondary")->nullable();
            $table->text("has_limited_use_if_gestures")->nullable();
            $table->text("has_limited_use_if_gestures_secondary")->nullable();
            $table->text("demonstrates_unusual_facial_expressions")->nullable();
            $table->text("demonstrates_unusual_facial_expressions_secondary")->nullable();
            $table->text("shows_little_variation_in_facial_expressions")->nullable();
            $table->text("shows_little_variation_in_facial_expressions_secondary")->nullable();
            $table->text("has_difficulty_understanding_facial_expressions_or_body_language")->nullable();
            //$table->text("has_difficulty_understanding_facial_expressions_or_body_language_secondary")->nullable();
            $table->text("use_inappropriate_body_orientation_or_proximity_in_interaction")->nullable();
            //$table->text("use_inappropriate_body_orientation_or_proximity_in_interaction_secondary")->nullable();
            $table->text("eye_contact_is_fleeting")->nullable();
            $table->text("eye_contact_is_fleeting_secondary")->nullable();
            $table->text("does_not_use_eye_contact")->nullable();
            $table->text("does_not_use_eye_contact_secondary")->nullable();
            $table->text("repeats_words_or_phrases_or_sentences")->nullable();
            $table->text("repeats_words_or_phrases_or_sentences_secondary")->nullable();
            $table->text("Has_difficulties_using")->nullable();
            $table->text("Has_difficulties_using_secondary")->nullable();
            //$table->text("has_difficulty_understanding_or_using_humor_appropriately")->nullable();
            //$table->text("has_difficulty_understanding_or_using_humor_appropriately_secondary")->nullable();
            $table->text("demonstrate_literal_use_and_understanding_of_language")->nullable();
            $table->text("demonstrate_literal_use_and_understanding_of_language_1")->nullable();
            
            //$table->text("demonstrate_literal_use_and_understanding_of_language_secondary")->nullable();
            $table->text("has_difficulty_with_multiple_meaning_words")->nullable();
            $table->text("has_difficulty_with_multiple_meaning_words_secondary")->nullable();
            $table->text("uses_rote_or_recital_language")->nullable();
            $table->text("uses_rote_or_recital_language_secondary")->nullable();
            $table->text("demonstrate_idiosyncratic_word_use")->nullable();
            $table->text("demonstrate_idiosyncratic_word_use_secondary")->nullable();
            $table->text("has_a_large_vocabulary_with_little_comprehension")->nullable();
            //$table->text("has_a_large_vocabulary_with_little_comprehension_secondary")->nullable();
            $table->text("reverses_personal_pronouns")->nullable();
            $table->text("reverses_personal_pronouns_secondary")->nullable();
            $table->text("reverses_personal_pronouns_1")->nullable();
            $table->text("lacks_variety_in_use_of_sentence_structure")->nullable();
            $table->text("lacks_variety_in_use_of_sentence_structure_secondary")->nullable();
            //$table->text("leaves_out_important_information_when_retelling_a_story_describing_an_event_giving_directions_or_giving_a_message")->nullable();
            //$table->text("leaves_out_important_information_when_retelling_a_story_describing_an_event_giving_directions_or_giving_a_message_secondary")->nullable();
            //$table->text("has_difficulties_relaying_information_in_a_sequential_way")->nullable();
            //$table->text("has_difficulties_relaying_information_in_a_sequential_way_secondary")->nullable();
            $table->text("says_too_much_or_too_little")->nullable();
            $table->text("says_too_much_or_too_little_secondary")->nullable();
            $table->text("is_slow_in_answering_questions_in_class_or_work")->nullable();
            //$table->text("is_slow_in_answering_questions_in_class_or_work_secondary")->nullable();
            $table->text("has_difficulty_understanding_what_to_do")->nullable();
            $table->text("has_difficulty_understanding_what_to_do_secondary")->nullable();
            //$table->text("often_asks_for_repeats_or_explanations_of_a_direction_or_assignment")->nullable();
            //$table->text("often_asks_for_repeats_or_explanations_of_a_direction_or_assignment_secondary")->nullable();
            //$table->text("does_the_wrong_thing_after_clear_directions_have_been_given")->nullable();
            //$table->text("does_the_wrong_thing_after_clear_directions_have_been_given_secondary")->nullable();
            //$table->text("doesnt_appear_to_watch_what_other_students_are_doing_for_information")->nullable();
            //$table->text("doesnt_appear_to_watch_what_other_students_are_doing_for_information_secondary")->nullable();
            $table->text("doesnt_seek_help_in_following_directions_when_it_is_needed")->nullable();
            //$table->text("doesnt_seek_help_in_following_directions_when_it_is_needed_secondary")->nullable();
            $table->text("appears_to_have_difficulty_understanding_tone_of_voice")->nullable();
            //$table->text("appears_to_have_difficulty_understanding_tone_of_voice_secondary")->nullable();
            $table->text("has_difficulty_comprehending_questions")->nullable();
            $table->text("has_difficulty_comprehending_questions_secondary")->nullable();
            $table->text("has_an_excellent_rote_memory_with_poor_comprehension")->nullable();
            //$table->text("has_an_excellent_rote_memory_with_poor_comprehension_secondary")->nullable();
            $table->text("often_looks_away_or_‘day_dreams_during_lectures")->nullable();
            //$table->text("often_looks_away_or_‘day_dreams_during_lectures_secondary")->nullable();
            $table->text("has_difficulty_remembering_orally_presented_information")->nullable();
            //$table->text("has_difficulty_remembering_orally_presented_information_secondary")->nullable();
            //$table->text("has_a_hard_time_picking_out_the_main_points_of_an_oral_presentation_or_story")->nullable();
            //$table->text("has_a_hard_time_picking_out_the_main_points_of_an_oral_presentation_or_story_secondary")->nullable();
            //$table->text("demonstrates_difficulty_remembering_the_names_of_teachers_and_class_members")->nullable();
            //$table->text("demonstrates_difficulty_remembering_the_names_of_teachers_and_class_members_secondary")->nullable();
            $table->text("has_difficulty_shifting_attention")->nullable();
            $table->text("has_difficulty_shifting_attention_secondary")->nullable();
            $table->text("has_difficulty_with_joint_attention")->nullable();
            $table->text("has_difficulty_with_joint_attention_secondary")->nullable();
            //$table->text("focuses_on_apparently_irrelevant_information_or_details")->nullable();
            //$table->text("focuses_on_apparently_irrelevant_information_or_details_secondary")->nullable();
            $table->text("uses_delayed_r_immediate_echolalia")->nullable();
            $table->text("uses_delayed_r_immediate_echolalia_secondary")->nullable();
            //$table->text("repeats_passages_from_movie_songs_commercials_cartoons_etc")->nullable();
            //$table->text("repeats_passages_from_movie_songs_commercials_cartoons_etc_secondary")->nullable();
            $table->text("does_not_responds_to_his_name")->nullable();
            $table->text("does_not_responds_to_his_name_secondary")->nullable();
            $table->text("responds_to_his_name_inconsistently")->nullable();
            $table->text("responds_to_his_name_inconsistently_secondary")->nullable();
            $table->text("inconsistently_attends_to_verbal_stimuli")->nullable();
            //$table->text("inconsistently_attends_to_verbal_stimuli_secondary")->nullable();
            $table->text("response_to_speech_is_delayed")->nullable();
            $table->text("response_to_speech_is_delayed_secondary")->nullable();
            //$table->text("demonstrates_pragmatic_difficulties_despite_adequate_scores_on_standardized_tests")->nullable();
            //$table->text("demonstrates_pragmatic_difficulties_despite_adequate_scores_on_standardized_tests_secondary")->nullable();
            $table->text("looks_down_or_away_when_talking")->nullable();
            $table->text("looks_down_or_away_when_talking_secondary")->nullable();
            $table->text("makes_off_topic_comments")->nullable();
            $table->text("makes_off_topic_comments_secondary")->nullable();
            //$table->text("has_trouble_stating_opinion_and_reason_for_those_opinions_for_a_varieties_of_age_appropriate_topics")->nullable();
            //$table->text("has_trouble_stating_opinion_and_reason_for_those_opinions_for_a_varieties_of_age_appropriate_topics_secondary")->nullable();
            $table->text("has_difficulty_initiating_conversations")->nullable();
            //$table->text("has_difficulty_initiating_conversations_secondary")->nullable();
            $table->text("has_difficulty_initiating_conversations_1")->nullable();
            $table->text("has_difficulty_initiating_pay")->nullable();
            $table->text("has_difficulty_initiating_pay_secondary")->nullable();
            $table->text("has_hard_time_sustaining_topic_of_conversation")->nullable();
            //$table->text("has_hard_time_sustaining_topic_of_conversation_secondary")->nullable();
            $table->text("has_difficulty_initiating_play")->nullable();
            $table->text("has_difficulty_initiating_play_secondary")->nullable();
            $table->text("has_a_hard_time_sustaining_topic_of_conversation")->nullable();
            //$table->text("has_a_hard_time_sustaining_topic_of_conversation_secondary")->nullable();
            $table->text("has_a_hard_time_sustaining_play_with_others")->nullable();
            $table->text("has_a_hard_time_sustaining_play_with_others_secondary")->nullable();
            $table->text("demonstrate_problems_terminating_a_conversation")->nullable();
            //$table->text("demonstrate_problems_terminating_a_conversation_secondary")->nullable();
            $table->text("has_difficulty_understanding_the_perspective_of_others")->nullable();
            //$table->text("has_difficulty_understanding_the_perspective_of_others_secondary")->nullable();
            $table->text("has_trouble_responding_in_an_empathetic_manner")->nullable();
            //$table->text("has_trouble_responding_in_an_empathetic_manner_secondary")->nullable();
            $table->text("interrupts_the_conversation_of_others")->nullable();
            $table->text("interrupts_the_conversation_of_others_secondary")->nullable();
            $table->text("has_difficulty_adapting_language_of_others")->nullable();
            $table->text("has_difficulty_adapting_language_of_others_secondary")->nullable();
            $table->text("has_difficulty_adapting_language_to_audience_or_setting")->nullable();
            //$table->text("has_difficulty_adapting_language_to_audience_or_setting_secondary")->nullable();
            $table->text("talks_too_much_in_a_conversation_with_peers_or_adults")->nullable();
            //$table->text("talks_too_much_in_a_conversation_with_peers_or_adults_secondary")->nullable();
            $table->text("talks_too_little_in_a_conversation_with_peers_or_adults")->nullable();
            //$table->text("talks_too_little_in_a_conversation_with_peers_or_adults_secondary")->nullable();
            $table->text("bringing_up_the_same_topic_repeatedly")->nullable();
            $table->text("bringing_up_the_same_topic_repeatedly_secondary")->nullable();
            $table->text("gives_recitative_or_redundant_information")->nullable();
            $table->text("gives_recitative_or_redundant_information_secondary")->nullable();
            $table->text("demonstrates_difficulty_taking_turns")->nullable();
            $table->text("demonstrates_difficulty_taking_turns_secondary")->nullable();
            $table->text("does_not_use_language_to_regulate_others_action")->nullable();
            //$table->text("does_not_use_language_to_regulate_others_action_secondary")->nullable();
            $table->text("has_difficulty_with_greetings_or_departures")->nullable();
            $table->text("has_difficulty_with_greetings_or_departures_secondary")->nullable();
            $table->text("has_difficulty_clarifying")->nullable();
            $table->text("has_difficulty_clarifying_secondary")->nullable();
            $table->text("has_difficulty_asking_for_clarification")->nullable();
            $table->text("has_difficulty_asking_for_clarification_secondary")->nullable();
            $table->text("has_difficulty_asking_question")->nullable();
            $table->text("has_difficulty_asking_question_secondary")->nullable();
            //$table->text("use_obsessive_questions_or_comments_to_initiate_or_maintain_interaction")->nullable();
            //$table->text("use_obsessive_questions_or_comments_to_initiate_or_maintain_interaction_secondary")->nullable();
            //$table->text("significant_differences_between_interaction_skills_with_peers_vs_adults")->nullable();
            //$table->text("significant_differences_between_interaction_skills_with_peers_vs_adults_secondary")->nullable();
            $table->text("does_not_evoke_attention_appropriately")->nullable();
            $table->text("does_not_evoke_attention_appropriately_secondary")->nullable();
            $table->text("difficulty_comprehending_social_rules")->nullable();
            $table->text("difficulty_comprehending_social_rules_secondary")->nullable();
            $table->text("difficulty_asking_for_and_accepting_help")->nullable();
            $table->text("difficulty_asking_for_and_accepting_help_secondary")->nullable();
            $table->text("protest_in_inappropriate_or_atypical_ways")->nullable();
            $table->text("protest_in_inappropriate_or_atypical_ways_secondary")->nullable();
            $table->text("does_not_ask_permission_when_appropriate_to_do_so")->nullable();
            //$table->text("does_not_ask_permission_when_appropriate_to_do_so_secondary")->nullable();
            $table->text("is_unaware_of_his_impact_on_others")->nullable();
            $table->text("is_unaware_of_his_impact_on_others_secondary")->nullable();
            $table->text("demonstrates_limited_range_of_communicative_functions")->nullable();
            //$table->text("demonstrates_limited_range_of_communicative_functions_secondary")->nullable();
            $table->text("pre_suppositional_skills_are_weak")->nullable();
            $table->text("pre_suppositional_skills_are_weak_secondary")->nullable();
            $table->text("appear_to_have_difficulty_judging_listener_interest")->nullable();
            //$table->text("appear_to_have_difficulty_judging_listener_interest_secondary")->nullable();
            $table->text("appears_more_interested_in_objectives_than_people")->nullable();
            //$table->text("appears_more_interested_in_objectives_than_people_secondary")->nullable();
            $table->text("does_not_establish_joint_focus")->nullable();
            $table->text("does_not_establish_joint_focus_secondary")->nullable();
            $table->text("does_not_anticipate_social_approach_of_other")->nullable();
            //$table->text("does_not_anticipate_social_approach_of_other_secondary")->nullable();
            //$table->text("shows_little_awareness_of_peers_of_have_atypical_interactions")->nullable();
            //$table->text("shows_little_awareness_of_peers_of_have_atypical_interactions_secondary")->nullable();
            //$table->text("does_not_observe_peers_with_curiosity")->nullable();
            $table->text("does_not_observe_peers_with_curiosity_secondary")->nullable();
            $table->text("has_difficulty_with_parallel_play")->nullable();
            $table->text("has_difficulty_with_parallel_play_secondary")->nullable();
            $table->text("has_difficulty_with_associative_play")->nullable();
            $table->text("has_difficulty_with_associative_play_secondary")->nullable();
            $table->text("has_difficulty_with_cooperative_play")->nullable();
            $table->text("has_difficulty_with_cooperative_play_secondary")->nullable();
            $table->text("laughs_for_no_apparent_reason")->nullable();
            $table->text("laughs_for_no_apparent_reason_secondary")->nullable();
            $table->text("cries_for_no_apparent_reason")->nullable();
            $table->text("cries_for_no_apparent_reason_secondary")->nullable();
            $table->text("has_difficulty_sharing")->nullable();
            $table->text("has_difficulty_sharing_secondary")->nullable();
            //$table->text("does_thing_s_for_himself_without_interacting_with_others")->nullable();
            //$table->text("does_thing_s_for_himself_without_interacting_with_others_secondary")->nullable();
            $table->text("has_limited_imaginative_or_pretending_play")->nullable();
            //$table->text("has_limited_imaginative_or_pretending_play_secondary")->nullable();
            $table->text("demonstrate_difficulty_with_cause_and_effect")->nullable();
            //$table->text("demonstrate_difficulty_with_cause_and_effect_secondary")->nullable();
            $table->text("play_appears_ritualistic_or_recitation_or_rote")->nullable();
            //$table->text("play_appears_ritualistic_or_recitation_or_rote_secondary")->nullable();
            $table->text("does_not_response_appropriately_to_others_distress")->nullable();
            //$table->text("does_not_response_appropriately_to_others_distress_secondary")->nullable();
            $table->text("lack_of_joint_attention_such_as_showing_and_pointing")->nullable();
            //$table->text("lack_of_joint_attention_such_as_showing_and_pointing_secondary")->nullable();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('functional_communications');
    }
};