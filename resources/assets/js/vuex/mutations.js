export const updateUserDetails = (state, user) => state.currentUser = user;

export const updateTeam = (state, team) => state.team = team;

export const refreshUsers = (state, users) => state.users = users;

export const addMessage = (state, message) => state.messages.push(message);

export const updateConversation = (state, conversation) => state.conversation = conversation;

/**
 * We have to sort them since the messages are in descending
 * order when we query it from the server.
 */
export const updateMessages = (state, messages) => {
  state.messages = messages;

  state.messages = _.orderBy(state.messages, 'created_at');
};
