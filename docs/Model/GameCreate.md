# # GameCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schedule_type** | **int** | The Type of the event | [optional]
**title** | **string** | Title of the game | [optional]
**game_date** | **\DateTime** | Date and time of the game &lt;br /&gt;  Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; format: &#x60;&#x60;&#x60;2022-01-20T16:30:00-05:00&#x60;&#x60;&#x60; |
**game_date_end** | **\DateTime** | Date and time the game is set to end &lt;br /&gt;  Uses &lt;a href&#x3D;\&quot;https://tools.ietf.org/html/rfc3339\&quot; target&#x3D;\&quot;_blank\&quot;&gt;ISO-8601&lt;/a&gt; format: &#x60;&#x60;&#x60;2022-01-20T16:30:00-05:00&#x60;&#x60;&#x60; | [optional]
**cancel_type** | **int** | Defaults to 0 for a new game | [optional]
**home_away_type** | **int** | Set to 0 for Home &lt;br /&gt;  Set to 1 for Away &lt;br /&gt;  Set to 2 for Neutral &lt;br /&gt;  Set to 3 for TBD | [optional]
**location_id** | **int** | ID of the location/venue for the game | [optional]
**location_ind** | **int** | For Home games (location_ind&#x3D;0), the &#x60;&#x60;&#x60;location_id&#x60;&#x60;&#x60; is an ID for an athletic field or room/building. Both of these are returned by GET Athletics venues.&lt;br /&gt;  For Away games (location_ind&#x3D;1), the &#x60;&#x60;&#x60;location_id&#x60;&#x60;&#x60; is an ID for an opponent location. These are returned by GET Athletics locations. | [optional]
**dismissal_time** | **string** | Time for dismissal using 24-hour format: &#x60;&#x60;&#x60;HH:mm&#x60;&#x60;&#x60; | [optional]
**departure_time** | **string** | Time for departure using 24-hour format: &#x60;&#x60;&#x60;HH:mm&#x60;&#x60;&#x60; | [optional]
**departure_note** | **string** | Notes related to departure | [optional]
**pickup_time** | **string** | Time for pickup using 24-hour format: &#x60;&#x60;&#x60;HH:mm&#x60;&#x60;&#x60; | [optional]
**pickup_note** | **string** | Notes related to pickup | [optional]
**league_ind** | **bool** | Set to true to indicate a league event | [optional]
**scrimmage_ind** | **bool** | Set to true to indicate a scrimmage event | [optional]
**tournament_ind** | **bool** | Set to true to indicate a tournament event | [optional]
**invitational_ind** | **bool** | Set to true to indicate an invitational event | [optional]
**playoff_ind** | **bool** | Set to true to indicate a playoff event | [optional]
**additional_notes** | **string** | Additional notes for the event | [optional]
**news_id** | **int** | News ID | [optional]
**send_notifications** | **bool** | Toggles &#39;Send Notification&#39; option | [optional]
**clear_reschedule** | **bool** | Set to true to remove the original scheduled game | [optional]
**skip_validation** | **bool** | Set to true to skip validation of this event | [optional]
**transportation** | [**\SKY\School\Model\GameTransportation[]**](GameTransportation.md) | List of the transportation to be used for this game | [optional]
**opponents** | [**\SKY\School\Model\GameOpponent[]**](GameOpponent.md) | List of Opponent ID&#39;s involved in this game | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)