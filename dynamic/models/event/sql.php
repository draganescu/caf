<?php
$querries["get_event_list"] = "select `name` from `eventnames` where `name` like '%s%%' limit %s";
$querries["get_participants"] = "select email, twitter, facebook from events, users, events_users where events_users.user = users.id AND events_users.event = events.id AND events.id = '%s'";