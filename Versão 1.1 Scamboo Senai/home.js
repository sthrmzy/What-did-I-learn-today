const postCard = document.createElement('div');
postCard.classList.add('post-card');
postCard.innerHTML = `
  <div class="post-header">
    <div class="user-avatar">
      <img src="user-avatar.png" alt="Avatar do usuário">
    </div>
    <div class="user-info">
      <h4>Nome do Usuário</h4>
      <p>@username</p>
    </div>
  </div>
  <h3>${assunto}</h3>
  <p><strong></strong> ${categoria}</p>
  <p>${descricao}</p>
  <p><strong></strong> <img src="${foto}" alt=""></p>
  <button class="chat-button">Chat</button>
`;

postsContainer.appendChild(postCard);


