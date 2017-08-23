import React, { Component, PropTypes } from 'react'
import { StyleSheet, View ,Text} from 'react-native'

import CustomButton from '../../components/CustomButton'

/**
 * Just a centered logout button.
 */
export default class HomeScreen extends Component {
  static propTypes = {
    logout: PropTypes.func
  }

  render () {
    return (
      <View style={styles.container}>
        <Text style={styles.text}> Loginxfghjkscreen goes hear</Text>


        <CustomButton
          text={'Logout'}
          onPress={this.props.logout}
          buttonStyle={styles.button}
          textStyle={styles.buttonText}
        />

      </View>
    )
  }
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center'
    //color:'rgb(130,100,3'
  },
  text: {
    color: 'rgb(230,120,40)'
  },
  button: {
    backgroundColor: '#1976D2',
    margin: 20
  },
  buttonText: {
    color: 'white',
    fontWeight: 'bold'
  }
})
