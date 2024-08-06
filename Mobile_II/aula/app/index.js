import firebase from 'firebase/compat/app';
import 'firebase/compat/firestore';

const firebaseConfig = {
  apiKey: "AIzaSyBeC8Xq-qhtamnG3zMXf8EFhoUOHGTHH_4",
  authDomain: "helloword-dfacf.firebaseapp.com",
  projectId: "helloword-dfacf",
  storageBucket: "helloword-dfacf.appspot.com",
  messagingSenderId: "530788761531",
  appId: "1:530788761531:web:ca49adbd6e7bae9bc18e9e"
};

firebase.initializeApp(firebaseConfig);

import React, { useEffect, useState } from 'react';
import { View, Text, FlatList } from 'react-native';

export default function App() {
  const [nomes, setNomes] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      const nomesColelection = firebase.firestore().collection('Nomes');
      const snapshot = await nomesColelection.get();

      const data = [];
      snapshot.forEach((doc) => {
        data.push({id: doc.id, ...doc.data() });
      });
      setNomes(data);
    };
    fetchData();
  }, []);
  return (
    <View style={{flex: 1, justifyContent: 'center', alignItems: 'center'}}>
      <Text> Lista de Nomes: </Text>
      <FlatList
      data={nomes}
      keyExtractor={(item) => item.id}
      renderItem={({ item }) => (
        <View>
          <Text>{item.Nome} {item.Sobrenome}</Text>
        </View>
      )}
      />
    </View>
  );

}