import React, { Component } from "react";
import {View,Text, Button, StyleSheet} from 'react-native';
import {TextInput} from 'react-native-gesture-handler';

export default class StudentInsert extends Component{

    constructor(props){
        super(props);
        this.state={RollNo:'',StudentName:'',Course:''}; //these variables are used to store the values
    }
    
    InsertRecord=()=>{
        var RollNo=this.state.RollNo;
        var StudentName=this.state.StudentName;
        var Course=this.state.Course;

        //if user does not provide input in any of these, an alert will be displayed 
        if(RollNo.length==0 || StudentName.length==0 || Course.length==0){
            alert("Required field is missing");
        }
        else{
            alert("Fetch API code come here");
        }
    }

    render(){
        return(
            <View style={styles.ViewStyle}>
                <TextInput 
                    style={styles.txtStyle}
                    placeholder={"RollNo"}
                    placeholderTextColor={"#2CB082"}
                    keyboardType={"numeric"}
                    onChangeText={RollNo=>this.setState({RollNo})}></TextInput>
                <TextInput 
                    style={styles.txtStyle}
                    placeholder={"Student Name"}
                    placeholderTextColor={"#2CB082"}
                    onChangeText={StudentName=>this.setState({StudentName})}></TextInput>
                <TextInput
                    style={styles.txtStyle} 
                    placeholder={"Course"}
                    placeholderTextColor={"#2CB082"}
                    onChangeText={Course=>this.setState({Course})}></TextInput>
                
                <Button title={"Save Record"} onPress={this.InsertRecord}></Button>
            </View>
        );
    }
}

const styles = StyleSheet.create({
    ViewStyle:{
        flex:1,
        padding:20,
        marginTop:10,
    },
    txtStyle:{
        borderBottomWidth:1,
        borderBottomColor:'#7DA210',
        marginBottom:20,
    },
});