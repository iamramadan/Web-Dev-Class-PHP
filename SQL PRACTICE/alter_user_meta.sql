ALTER TABLE `user_meta`
    ADD CONSTRAINT fk_user_meta
     FOREIGN KEY(user_id) REFERENCES users(id)